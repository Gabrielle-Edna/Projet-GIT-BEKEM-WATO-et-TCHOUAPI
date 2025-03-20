<?php include 'header.php';

$sql = $pdo->prepare("SELECT * FROM patient WHERE role = 4");
$sql->execute();
$patients = $sql->fetchAll(PDO::FETCH_OBJ);



?>

<table>
  <thead>
    <tr>
      <th>Nom Prénom</th>
      <th>Profession</th>
      <th>Téléphone</th>
      <th>Email</th>
      <th>Date de Naissance</th>
      <th>Infirmière</th>
      <th>Médecin</th>
      <th>Service</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($patients as $patient): ?>
      <tr>

        <td>

          <span><?= $patient->nom_patient ?> <?= $patient->prenom_patient ?></span>
        </td>
        <td><?= $patient->profession ?></td>
        <td><?= $patient->telephone_patient ?></td>
        <td><?= $patient->email_patient ?></td>
        <td><?= $patient->date_naissance_patient ?></td>
        <td><?php getinfirmiere($patient->id_infirmiere); ?></td>
        <td><?php getmedecin($patient->id_medecin); ?></td>
        <td><?php getservice($patient->id_service); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<link rel="stylesheet" href="./assets/css/style3.css">
<script src="./assets/js/script.js"></script>

</body>

</html>