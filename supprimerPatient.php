<?php

    if(!isset($_GET['pden']) AND empty($_GET['pden'])){
        header("location: liste.php");
    }

    $id = $_GET['pden'];
    function supprimer($id){
        if(require('db/db.php')){
            $req = $pdo->prepare("UPDATE patient SET role = 4 WHERE id_patient = ? ");
            $req->execute(array($id));
            
            header("location: liste.php");
        }
    }
    supprimer($id);

?>