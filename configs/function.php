<?php


function  getinfirmiere(int $id) {
    $pdo = new PDO('mysql:host=localhost;dbname=file_attente; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("SELECT nom FROM infirmiere WHERE id='$id'");
    $sql->execute();
    $result=$sql->fetchAll();
    echo $result[0]->nom;
}

function  getmedecin(int $id) {
    $pdo = new PDO('mysql:host=localhost;dbname=file_attente; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("SELECT nom FROM medecin WHERE id='$id'");
    $sql->execute();
    $result=$sql->fetchAll();
    echo $result[0]->nom;
}

function  getservice(int $id) {
    $pdo = new PDO('mysql:host=localhost;dbname=file_attente; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("SELECT nom_service FROM service WHERE id_service='$id'");
    $sql->execute();
    $result=$sql->fetchAll();
    echo $result[0]->nom_service;
}
