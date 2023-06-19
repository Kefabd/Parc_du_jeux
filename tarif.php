<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Interface Tarifs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .pricing {
      margin-top: 20px;
    }

    .pricing h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .price-table {
      width: 100%;
    }

    .price-table th, .price-table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    .price-table th {
      background-color: #f2f2f2;
      color:purple;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
    }

    .no-border {
      border-collapse: collapse;
    }

    .no-border th,
    .no-border td {
      border: none;
    }
    .clickable-div1 {
      width: 20%;
      height: 10%;
      background-color: purple;
      color: white;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      margin: 10px;
    }

    .clickable-div1:hover {
      opacity: 0.8;
    }
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
      background-size: cover;
     background-position: center;
    }
    .clickable-div:hover {
      opacity: 0.8;
    }
    .clickable-div:nth-of-type(1) {
      background-image: url("Images/sombre.jpg");
}

.clickable-div:nth-of-type(2) {
  background-image: url('Images/restaurant2.jpg');
}

.clickable-div:nth-of-type(3) {
  background-image: url('Images/contact2.jpg');
}

.clickable-div:nth-of-type(4) {
  background-image: url('Images/horaire2.jpg');
}
  </style>
  <?php include 'navbar.php';?>
</head>
<body>
  <div class="container">
    <div class="pricing">
      <h2>Nos Tarifs:</h2>
      <p>Le billet d'entrée au Parc donne accès à l'ensemble des spectacles et attractions pour la journée</p>
      <table class="table price-table no-border">
        <thead>
          <tr>
            <th>Tarifs d'entrée saison</th>
            <th>Gaulois adulte(a partir 12ans)</th>
            <th>Gaulois enfant(de 3 a 11 ans)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Connexion à la base de données
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "parc2";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Récupération des tarifs depuis la base de données
          $sql = "SELECT * FROM tarif2";
          $result = $conn->query($sql);

          // Affichage des tarifs
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['descr'] . "</td>";
              echo "<td><span class='price'>" . $row['adulte'] . " Dhs</span></td>";
              echo "<td><span class='price'>" . $row['enfant'] . " Dhs</span></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='3'>Aucun tarif disponible</td></tr>";
          }

          // Fermeture de la connexion à la base de données
          $conn->close();
          ?>
        </tbody>
      </table>
      <p>Parking (par voiture) : 10 Dhs par jour.</p>
      <div class="clickable-div1" onclick="window.location.href='billets.php'">
      <h3>Reserver</h3>
    </div>
    <h1>ÇA PEUT VOUS INTÉRESSER</h1><br><br>
    <div class="container">
    
    <div class="clickable-div" onclick="window.location.href='Attraction.php'">
      <h3>Attraction</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='resto.php'">
      <h3>Restaurant</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='contact.php'">
      <h3>Contact Us</h3>
    </div>
    <div class="clickable-div" onclick="window.location.href='horaire.php'">
      <h3>Horaire</h3>
    </div>
  </div>

    
    </div>
  </div><br><br>
  
</body>
<?php include "footer.php";?>
</html>
