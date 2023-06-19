<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Employe</title>
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
    <style>
    .container {
      display: flex;
      justify-content: center;
    }

    .clickable-div {
      width: 200px;
      height: 200px;
      background-color: purple;
      color: white;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      margin: 10px;
    }

    .clickable-div:hover {
      opacity: 0.8;
    }
    h1{
      text-align:center;
    }
  </style>
</head>
<body>
    <?php include'navEmp.php';?>
<?php
    // session_start();

    // Check if the user is logged in as an employee
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'employe') {
        // Access the user type and perform actions for employees
        echo 'Connecté en tant qu employé';
        echo "<br>Bienvenue ".$_SESSION['username2'];?>
        <h1>Choisir la base de donnee a consulter:</h1>
  <div class="container">
 
    <div class="clickable-div" onclick="window.location.href='ajout_horaire.php'">
      <h3>Horaire</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='ajout_tarif.php'">
      <h3>Tarif</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='voir_contact.php'">
      <h3>Contact</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='Attraction.php'">
      <h3>Attraction</h3>
    </div>
  </div>
        <?php
    }   
    else {
        // Redirect the user if not logged in as an employee
        header('Location: logout.php'); // Redirect to the login page or appropriate page
        exit;
    }
?>
<?php include "footer.php";?>
</body>
</html>