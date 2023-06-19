<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Voir Contact</title>
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

    

    .no-border {
      border-collapse: collapse;
    }

    .no-border th,
    .no-border td {
      border: none;
    }
  </style>
  <?php include 'navbar.php';?>
</head>
<body>
  <div class="container">
    <div class="pricing">
      <h2>Les messages des visiteurs:</h2>
      <table class="table price-table no-border">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
            <th>Message</th>
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
          $sql = "SELECT * FROM contact";
          $result = $conn->query($sql);

          // Affichage des tarifs
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['nom_contact'] . "</td>";
              echo "<td>" . $row['email_contact'] . "</td>";
              echo "<td>" . $row['sujet'] . "</td>";
              echo "<td>".$row['msg']."</td>";
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
    </div>
  </div>
  <?php include "footer.php";?>
</body>
</html>
