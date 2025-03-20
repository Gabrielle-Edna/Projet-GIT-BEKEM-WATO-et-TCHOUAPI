<?php require_once("./db/db.php");
session_start();
require_once("./configs/function.php");
$sql = $pdo->prepare("SELECT * FROM service");
$sql->execute(array());
$services = $sql->fetchAll(PDO::FETCH_OBJ);
$sql = $pdo->prepare("SELECT * FROM medecin");
$sql->execute(array());
$Medecins = $sql->fetchAll(PDO::FETCH_OBJ);
$sql = $pdo->prepare("SELECT * FROM infirmiere");
$sql->execute(array());
$infirmieres = $sql->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Queue Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="app-container">
    <div class="sidebar">
      <div class="sidebar-header">

      </div>
      <div class="nos_nom">
        <h1 style="color: #ffffff"><u>projet Edna-Daryl</u></h1>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item active">
          <a href="dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
            <span>Acceuil_(infirmiere)</span>
          </a>
        </li>
        <li class="sidebar-list-item ">
          <a href="liste.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <path d="M16 10a4 4 0 0 1-8 0" />
            </svg>
            <span>Liste_d'attente(medecin)</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="historique.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
              <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
              <path d="M22 12A10 10 0 0 0 12 2v10z" />
            </svg>
            <span>Historique</span>
          </a>
        </li>
      </ul>
      <div class="account-info">
        <div class="account-info-picture">

        </div>
        </button>
        <a class="account-info-more" href="./configs/deconnexion.php">
          <button style="background-color: darkred; color:aliceblue; height: 21px; width:105px; border-radius: none ; border: none; cursor: pointer; ">
            Deconnexion
          </button>
        </a>
      </div>
    </div>
    <div class="app-content">
      <div class="app-content-header">
        <h1 class="app-content-headerText"><u>BIENVENUE</u> <?php echo $_SESSION['name'];  ?></h1>
        <img src="./image/123.jpeg" width=9% height=auto>
        <!--<button class="mode_Sswitch" title="Switch Theme">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>-->
      </div>
      <div class="app-content-actions">
        <div class="app-content-actions-wrapper">
          <script>
            var modeSwitch = document.querySelector('.mode-switch');
            modeSwitch.addEventListener('click', function() {
              document.documentElement.classList.toggle('light'); // Bascule la classe 'light' sur le document
              modeSwitch.classList.toggle('active'); // Bascule la classe 'active' sur le bouton
            });
          </script>
        </div>
      </div>