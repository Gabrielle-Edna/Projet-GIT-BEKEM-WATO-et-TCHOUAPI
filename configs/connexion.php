<?php
session_start();
require_once("../db/db.php");


    if (!empty($_POST["username"]) AND !empty($_POST["password"])) {
        //Récupérer les valeurs des champs
        $name = trim(htmlspecialchars($_POST["username"]));
        $password = trim(htmlspecialchars($_POST["password"]));

        
        //Vérification de la saisie utilisateur
        if (strlen($name) >= 3) {
                if (strlen($password) >= 8) {

                    $req = $pdo->prepare("
                    SELECT id, nom, password FROM medecin WHERE nom = '$name' AND password = '$password'
                    UNION
                    SELECT id, nom, password FROM infirmiere WHERE nom = '$name' AND password = '$password'
                ");
                $req->execute();
                $user = $req->fetchAll();
                    

                    if ($req->rowCount() == 1) {
                        //créer les variables de sessions
                        $_SESSION['id'] = $user[0]->id;
                        $_SESSION['name'] = $user[1]->nom;
                        
                        
                        header("Location:../dashboard.php");
                    }else{
                        $error = "Une information incorrecte a ete saisie";
                        header("Location:../index.php");
                    }
                }else {
                    $error = "Entrez un mot de passe comportant au moins 8 caractères.";
                }
        }else {
            $error = "Veuillez rentrer un nom de plus de 3 caracteres.";
        }
    }else {
        $error = "Veuillez remplir tous les champs!";
    }

?>