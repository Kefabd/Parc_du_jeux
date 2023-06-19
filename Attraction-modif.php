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
        <h1>Modifier Attraction :</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <label for="tarif">Ancien nom :</label>
                <input type="text" class="form-control" id="tarif" name="nom_avant" required>
            </div>
            <div class="form-group">
                <label for="adulte">Nouveu Nom :</label>
                <input type="text" class="form-control" id="adulte" name="nom_apres" required>
            </div>
            <div class="form-group">
                <label for="enfant">Description :</label><br>
                <input type="text" name="desc" id="enfant" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="adulte">Capacité :</label>
                <input type="number" class="form-control" id="adulte" name="Capacite" required>
            </div>
            <div class="form-group">
                <label for="adulte">Durée :</label>
                <input type="text" class="form-control" id="adulte" name="duration" placeholder="...min ...s" required>
            </div>
            <div class="form-group">
                <label for="adulte">Taille minimale :</label>
                <input type="number" class="form-control" id="adulte" name="taille_min" required>
            </div>
            <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
           <br><br>
        </form>
        
        
        <?php 
        try {
            $conn = new PDO('mysql:hostname=localhost;dbname=parc2','root','');
        } catch (PDOException $e) {
            die("Erruer de connexion" . $e->getmessage());
        }
        
        $ancien_nom = isset($_POST['nom_avant']) ? strtolower($_POST['nom_avant'])  : '';
        $nv_nom = isset($_POST['nom_apres']) ? $_POST['nom_apres'] : '';
        $nv_desc = isset($_POST['desc']) ? $_POST['desc'] : '';
        $nv_capac =isset($_POST['Capacite']) ? $_POST['Capacite'] : '';
        $nv_duree = isset($_POST['duration']) ? $_POST['duration'] : '';
        $nv_taille =isset($_POST['taille_min']) ? $_POST['taille_min'] : '';
        
                
        
        if(isset($_POST['modifier']) and $_SERVER['REQUEST_METHOD']=='POST') {
                

            
              
            $sql = $conn->prepare("UPDATE attraction SET nom_attra=?,descr=?,capacite=?,duree=?,taille_min=? WHERE LOWER(nom_attra)=?; ");
                
            $sql->execute(array($nv_nom,$nv_desc,$nv_capac,$nv_duree,$nv_taille,$ancien_nom));    


        } 
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
