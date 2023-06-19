<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Tarif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: white;
            color: purple;
        }
        .container {
            margin-top: 50px;
            text-align: center;
            color: purple;
        }
        table {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            border: 1px solid white;
            margin:auto;
        }
        table td {
            color: black;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            width: 50%;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: purple;
            border-color: purple;
        }
    </style>
    <?php include 'navEmp.php';?>
</head>
<body>
    <div class="container">
        <h1>Ajouter un tarif :</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <label for="tarif">Tarif :</label>
                <input type="text" class="form-control" id="tarif" name="tarif">
            </div>
            <div class="form-group">
                <label for="adulte">Adulte :</label>
                <input type="number" class="form-control" id="adulte" name="adulte">
            </div>
            <div class="form-group">
                <label for="enfant">Enfant :</label>
                <input type="number" class="form-control" id="enfant" name="enfant">
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
        
        $tarif = isset($_POST['tarif']) ? $_POST['tarif'] : '';
        $adulte = isset($_POST['adulte']) ? $_POST['adulte'] : '';
        $enfant = isset($_POST['enfant']) ? $_POST['enfant'] : '';
        
        if(isset($_POST['modifier'])) {
            $modif = $conn->prepare('UPDATE tarif2 SET adulte = ?, enfant = ? WHERE descr = ?');
            $modif->bind_param("iss", $adulte, $enfant, $tarif);
            $modif->execute();
        } elseif(isset($_POST['ajouter'])) {
            $sql2 = $conn->prepare("INSERT INTO tarif2 (descr, adulte, enfant) VALUES (?, ?, ?)");
            $sql2->bind_param("sii", $tarif, $adulte, $enfant);
            $sql2->execute();
        } elseif(isset($_POST['supprimer'])) {
            $supp = $conn->prepare('DELETE FROM tarif2 WHERE descr = ?');
            $supp->bind_param("s", $tarif);
            $supp->execute();
        }
        
        $sql = "SELECT * FROM tarif2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Tarif</th><th>Adulte</th><th>Enfant</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["descr"]."</td><td>".$row["adulte"]."</td><td>".$row["enfant"]."</td></tr>";
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
