<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parc d'attractions - Horaires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .schedule {
            display: flex;
            margin-top: 20px;
        }

        .schedule-image {
            flex: 1;
            padding: 10px;
        }

        .schedule-image img {
            max-width: 100%;
            height: auto;
        }

        .schedule-table {
            flex: 2;
            padding: 10px;
        }

        #schedule-table {
            width: 100%;
        }

        #schedule-table th {
            text-align: center;
        }

        #schedule-table td {
            text-align: center;
        }

        #calendar {
            max-width: 300px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 5px;
            border: 1px solid black;
        }

        th {
            color: purple;
            background-color: #ccc;
        }
        .image-container {
    border-radius: 10px;
    overflow: hidden;
}

.image-container img {
    width: 100%;
    height: auto;
}

.image-text {
    margin-top: 10px;
    text-align: center;
}

  .schedule {
            margin-top: 20px;
        }

        .schedule-image {
  background-image: url("Images/sombre.jpg");
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  padding: 20px;
  color: white;
  background-color: rgba(0, 0, 0, 0.4); /* Ajustez l'opacité ici */
}

.schedule-image p {
  color: white;
  font-size: 25px;
}
.pub {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.pub-text {
  display: flex;
  flex-direction: column;
}

.pub p {
  margin-bottom: 10px;
  font-size: 25px;
}

    </style>
    <?php include 'navbar.php';?>

</head>
<body>
<!--<div id="calendar"></div>

<script src="horaire.js"></script>-->

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <br>
      <div class="pub">
        <p>Ne manquez pas</p>
        <a href="Attraction.php" class="btn btn-primary">Plus d'aventures</a>
      </div>
      <br>
      <div class="schedule-image">
        <p>Venez découvrir un lieu magique où les rêves deviennent réalité et les aventures n'ont pas de limites.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="schedule-table">
    <div class="schedule-table">
        <table id="schedule-table" class="table table-bordered">
            <tr>
                <th>Jour</th>
                <th>Heures d'ouverture</th>
                <th>Heures de fermeture</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "parc2";

            // Créer une connexion à la base de données
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Requête SQL pour récupérer les horaires
            $sql = "SELECT jour, heures_ouverture, heures_fermeture FROM horaire";
            $result = $conn->query($sql);
            // Vérifier si des résultats ont été trouvés
            if ($result->num_rows > 0) {
                // Afficher les horaires dans la table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["jour"] . "</td><td>" . $row["heures_ouverture"] . "</td><td>" . $row["heures_fermeture"] . "</td></tr>";
                }
            } else {
                echo "Aucun horaire trouvé.";
            }

            // Fermer la connexion à la base de données
            $conn->close();
            ?>
        </table>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
<?php include "footer.php";?>

</body>
</html>
