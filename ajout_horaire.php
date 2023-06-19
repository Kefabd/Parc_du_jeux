<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Horaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
            color: purple;
            margin: 50px;
        }
        .container {
            margin-top: 50px;
            text-align: center;
            color:purple;
        }
        .form-group {
            width: 50%;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: purple;
            border-color: purple;
        }
        table {
            width: 100%;
            margin-top: 20px;
            text-align: center;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            text-align: center;
            border: 1px solid white;
        }
        table td{
          color:black;
        }
    </style>
    <?php include 'navEmp.php';?>
</head>
<body>
    <div class="container">
        <h1 >Ajouter un horaire :</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <label for="jour">Jour :</label>
                <input type="text" class="form-control" id="jour" name="jour">
            </div>
            <div class="form-group">
                <label for="heures_ouverture">Heure d'ouverture :</label>
                <input type="time" class="form-control" id="heures_ouverture" name="heures_ouverture">
            </div>
            <div class="form-group">
                <label for="heures_fermeture">Heure de fermeture :</label>
                <input type="time" class="form-control" id="heures_fermeture" name="heures_fermeture">
            </div><br><br>
            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
            <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
            <button type="submit" class="btn btn-primary" name="supprimer">Supprimer</button><br><br>
        </form>

        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "parc2";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $jour = isset($_POST['jour']) ? $_POST['jour'] : '';
        $heures_ouverture = isset($_POST['heures_ouverture']) ? $_POST['heures_ouverture'] : '';
        $heures_fermeture = isset($_POST['heures_fermeture']) ? $_POST['heures_fermeture'] : '';

        
        if(isset($_POST['modifier'])) {
            $modif = $conn->prepare('UPDATE horaire SET heures_ouverture = ?, heures_fermeture = ? WHERE jour = ?');
            $modif->bind_param("sss", $heures_ouverture, $heures_fermeture, $jour);
            $modif->execute();
        } elseif(isset($_POST['ajouter'])) {
            $sql2 = $conn->prepare("INSERT INTO horaire (jour, heures_ouverture, heures_fermeture) VALUES (?, ?, ?)");
            $sql2->bind_param("sss", $jour, $heures_ouverture, $heures_fermeture);
            $sql2->execute();
        } elseif(isset($_POST['supprimer'])) {
            $supp = $conn->prepare('DELETE FROM horaire WHERE jour = ?');
            $supp->bind_param("s", $jour);
            $supp->execute();
        }
        
        $sql = "SELECT * FROM horaire";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Jour</th><th>Heure d'ouverture</th><th>Heure de fermeture</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["jour"]."</td><td>".$row["heures_ouverture"]."</td><td>".$row["heures_fermeture"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    <?php include "footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>