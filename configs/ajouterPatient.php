<?php
require_once("../db/db.php");

    // Vérifier si les champs sont non vides.
    if(!empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["date_naissance"]) AND !empty($_POST["profession"]) AND !empty($_POST["adresse_mail"]) AND !empty($_POST["numero_telephone"]) AND !empty($_POST["service_sollicite"])AND !empty($_POST["Medecin"])) {
            // Déclaration des variables en retirant les espaces grace à trim et en retirant les possibles injections html grace à htmlspecialchars.
            $nom = trim(htmlspecialchars($_POST["nom"]));
            $prenom = trim(htmlspecialchars($_POST["prenom"]));
            $date_naissance = trim(htmlspecialchars($_POST["date_naissance"]));
            $profession = trim(htmlspecialchars($_POST["profession"]));
            $adresse_mail= trim(htmlspecialchars($_POST["adresse_mail"]));
            $numero_telephone= trim(htmlspecialchars($_POST["numero_telephone"]));
            $service_sollicite= trim(htmlspecialchars($_POST["service_sollicite"]));
            $Medecin= trim(htmlspecialchars($_POST["Medecin"]));
            $infirmiere = $_POST["infirmiere"];
            // Vérifier la saisie de l'utilisateur
        if (strlen($nom) >=3 AND strlen($nom) <= 255){ // votre nom doit contenir entre 3 à 255 caractères.
                    //Si pas de correspondance, on poursuit notre insertion en base de données.
                    $req = $pdo->prepare("INSERT INTO patient SET nom_patient=?, prenom_patient=?, profession=?,date_naissance_patient=?, email_patient=?, telephone_patient=?,id_infirmiere=?,id_medecin=? ,id_service=?");
                    $req->execute(array($nom, $prenom,  $profession ,  $date_naissance, $adresse_mail , $numero_telephone , $infirmiere, $Medecin,$service_sollicite ));
                    header("Location: ../liste.php");
        }else {
            $error = "Veuillez entrer un Nom  qui contient entre 3 et 255 caractères.";
        }
    } else {
        $error = "veuillez remplir tous les champs !";
    }

//ecris une fonction php qui recupere le nom de linfirmiere dans la base de donnees appartire de l'id passer en parametre  
?>
