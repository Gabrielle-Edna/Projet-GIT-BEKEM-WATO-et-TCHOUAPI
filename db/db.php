<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=file_attente; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print('Erreur' . $e->getMessage());
}
