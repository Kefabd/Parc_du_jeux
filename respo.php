<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Interface avec des div centrées</title>
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
    <?php include 'navbar.php';?>

</head>
<body>
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
  <?php include "footer.php";?>
</body>
</html>
