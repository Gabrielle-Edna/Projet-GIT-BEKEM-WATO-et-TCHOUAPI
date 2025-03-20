<?php include 'header.php';

$sql = $pdo->prepare("SELECT * FROM patient WHERE role = 3");
$sql->execute();
$patients = $sql->fetchAll(PDO::FETCH_OBJ);

?>

<link rel="stylesheet" href="./assets/css/style3.css">
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
      <th>Consulter</th>
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
        <td>
          <a href="supprimerPatient.php?pden=<?= $patient->id_patient ?>">Consulter</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<div class="popup-overlay" id="popupOverlay2">
  <div class="popup-content2">
    <div class="popup-header">
      <h2>liste des Patients</h2>
      <button class="close-btn" id="closePopupBtn2">&times;</button>
    </div>
    <form method="post" action="./configs/ajouterPatient.php">
      <h1>Ajouter un nouveau patient</h1>
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required><br><br>

      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required><br><br>

      <label for="date_naissance">Date de naissance :</label>
      <input type="date" name="date_naissance" id="date_naissance" required><br><br>

      <label for="profession">Profession :</label>
      <input type="text" name="profession" id="profession" required><br><br>

      <label for="adresse_mail">Adresse mail :</label>
      <input type="email" name="adresse_mail" id="adresse_mail" required><br><br>

      <label for="numero_telephone">Numéro de téléphone :</label>
      <input type="tel" name="numero_telephone" id="numero_telephone" required><br><br>

      <label for="service_sollicite">Service de santé sollicité :</label>
      <select name="service_sollicite" id="service_sollicite" required><br><br>
        <option selected>Sélectionnez un service</option>
        <?php foreach ($services as $service) : ?>
          <option value="<?= $service->id_service ?>"><?= $service->nom_service ?></option>
        <?php endforeach; ?>
      </select>

      <label for="Medecin">Medecin en charge en charge :</label>
      <select name="Medecin" id="Medecin" required><br><br>
        <option selected>Sélectionnez un medecin</option>
        <?php foreach ($Medecins as $Medecin) : ?>
          <option value="<?= $Medecin->id ?>"><?= $Medecin->nom ?> <?php getservice($Medecin->id_service) ?></option>
        <?php endforeach; ?>
      </select>

      <label for="infirmiere">infirmiere :</label>
      <select name="infirmiere" id="infirmiere" required><br><br>
        <option selected>Sélectionnez une infirmiere</option>
        <?php foreach ($infirmieres as $infirmiere) : ?>
          <option value="<?= $infirmiere->id ?>"><?= $infirmiere->nom ?></option>
        <?php endforeach; ?>
      </select>

      <button class="action-button" type="submit">Envoyer</button>
    </form>

  </div>
</div>

<!-- partial -->
<script src="./assets/js/script.js"></script>

</body>

</html>