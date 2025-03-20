<?php include 'header.php';

?>
<div class="products-area-wrapper tableView">
  <div class="box">
    <div class="box2">
      <form method="post" action="./configs/ajouterPatient.php">
        <h1><u>Ajouter un nouveau patient</u></h1>
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

        <h1> <u>Parametre du patient</u></h1><br><br>

        <label for="poids">Poids :</label>
        <input type="number" id="Poids" placeholder="Poids (kg)" required /><br><br>

        <label for="Taille">Taille :</label>
        <input type="number" id="taille" placeholder="Taille (cm)" required /><br><br>

        <label for="Tension arterielle">Tension arterielle :</label>
        <input type="number" id="tension" placeholder="Tension artérielle" required /><br><br>

        <label for="Temperature">Temperature</label>
        <input type="number" id="temperature" placeholder="Température (°C)" required /><br><br>

        <label for="Frequence-cardiaque">Fréquence cardiaque :</label>
        <input type="number" id="frequence-cardiaque" placeholder="Fréquence cardiaque" required /><br><br>

        <label for="frequence-respiratoire">Fréquence respiratoire :</label>
        <input type="number" id="frequence-respiratoire" placeholder="Fréquence respiratoire" required /><br><br>

        <label for="service_sollicite">Service de santé sollicité :</label>
        <select name="service_sollicite" id="service_sollicite" required><br><br>
          <option selected>Sélectionnez un service</option>
          <?php foreach ($services as $service) : ?>
            <option value="<?= $service->id_service ?>"><?= $service->nom_service ?></option>
          <?php endforeach; ?>
        </select><br><br>

        <label for="Medecin">Medecin en charge en charge :</label>
        <select name="Medecin" id="Medecin" required><br><br>
          <option selected>Sélectionnez un medecin</option>
          <?php foreach ($Medecins as $Medecin) : ?>
            <option value="<?= $Medecin->id ?>"><?= $Medecin->nom ?> <?php getservice($Medecin->id_service) ?></option>
          <?php endforeach; ?>
        </select><br><br>

        <label for="infirmiere">infirmiere :</label>
        <select name="infirmiere" id="infirmiere" required><br><br>
          <option selected>Sélectionnez une infirmiere</option>
          <?php foreach ($infirmieres as $infirmiere) : ?>
            <option value="<?= $infirmiere->id ?>"><?= $infirmiere->nom ?></option>
          <?php endforeach; ?>
        </select><br><br>

        <button class="action-button" type="submit">Envoyer</button>
      </form>
    </div>

  </div>

</div>
<!-- partial -->
<script src="./assets/js/script.js"></script>

</body>

</html>