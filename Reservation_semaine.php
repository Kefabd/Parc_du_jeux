<?php
session_start();
        require_once('fpdf185/fpdf.php');
        require_once('MonPdf.php');
        
       
        if (isset($_POST['generate_pdf'])) {
            $date_visite = $_POST['date_visite'];
            $quantite_adulte = $_POST['ajout_adulte'];
            $quantite_enfant = $_POST['ajout_enfant'];
            $prenom = $_SESSION['username'];
        
            // Connexion à la base de données
            $host = 'localhost';
            $dbname = 'parc2';
            $username = 'root';
            $password = '';
        
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                // Requête pour récupérer les informations du visiteur
                $stmt1 = $conn->prepare('SELECT * FROM visiteur WHERE prenom_visit = :prenom');
                $stmt1->bindParam(':prenom', $prenom);
                $stmt1->execute();

                $type='Billet semaine';
        
                // Requête pour récupérer les tarifs
                $stmt2 = $conn->prepare('SELECT * FROM tarif2 WHERE descr = :descr');
                $stmt2->bindParam(':descr', $type);
                $stmt2->execute();
        
                if ($stmt1->rowCount() > 0 && $stmt2->rowCount() > 0) {
                    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                    $nom = $row1['nom_visit'];
                    $email = $row1['email_visit'];
                    $adr = $row1['adresse_visit'];
                    $tel = $row1['tel_visit'];
                    $date_n = $row1['datenais_visit'];
        
                    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                    $prix_ad = $row2['adulte'];
                    $prix_en = $row2['enfant'];
                    $tot = $prix_ad * $quantite_adulte + $prix_en * $quantite_enfant;
        
                    // Création de l'objet PDF avec les données récupérées
                    $pdf = new MonPDF($nom, $prenom, $adr, $tel, $date_n, $email, 'semaine', $date_visite, $tot, $quantite_adulte, $quantite_enfant);
                    $pdf->AddPage();
                    $pdf->SetAutoPageBreak(false);
                    $pdf->Content();
                    $pdf->Output('reservation.pdf', 'D');
                } else {
                    echo 'Aucun visiteur trouvé.';
                }
            } catch (PDOException $e) {
                echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
            }
        }
        ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Reservation</title>
        <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">

    <?php
    session_start();

    $host='localhost';
    // $dbname='test0';
    $dbname='parc2';
    $username='root';
    $password='';
    
    try{
        $conn = new mysqli($host, $username, $password, $dbname);
        echo 'Connexion réussie à la base de données';

    }
    catch(Exception $e){
        echo 'Erreur de connexion à la base de données : '.$e->getMessage();
    }
?>

    </head>
    <body>
                
    <?php
    
    // Check if the user is logged in as an employee
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') {
        // Access the user type and perform actions for employees
        echo "<br>".'Connecté en tant que visiteur';
        // echo "<br>"."Bienvenue ".$_SESSION['username'];

        // Rest of your code for the employe.php file

    }
    else {
        // Redirect the user if not logged in as an employee
        header('Location: logout.php'); // Redirect to the login page or appropriate page
        exit;
    }
?>
        <?php

        ?>
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                <img src="Images/p3.jpeg" alt="logo" width="150px">
            </div>
            <div class="row d-flex justify-content-center align-items-center">
            <?php
                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') { ?>
                    <h3>Bienvenue <span id="L"> <?php echo $_SESSION['username'] ?></span></h3>
                <?php
                    } ?>
            </div>
        <div class="row d-flex justify-content-center align-items-center">
            <h4>Sélectionnez <span id="gros">la quantité de billets</span> que vous souhaitez.</h4>
        </div>
        <br>
        <?php
            $sql1 = "SELECT * FROM tarif2";
            $result = $conn->query($sql1);

            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                if($row['descr']=="Billet semaine"){
                    $prix_adulte_semaine=$row['adulte'];
                    $prix_enfant_semaine=$row['enfant'];
                }
                
            }
            }
            else{
            echo "Aucun billet disponible";
            }

                        ?>
        <form method="POST" >
        <div class="row flex-column flex-sm-row">
            <div class="col-sm-6">
                <div class="container" id="container">
                <div class="row">
                    <h4 id="content" class="text-center ">Billet Semaine</h4>
                </div>
                <br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <h4>Date de visite</h4>
                    </div>
                    <div class="col-sm-6">
                    <input type="date" name="date_visite" id="dvisite" required>
                    </div>                   
                </div>
                <br><br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <p><span id="gras">Adulte </span><?php echo  $prix_adulte_semaine?> <br>12 ans et plus<p>
                    </div>
                    <div class="col-sm-6">
                    <input type="number" name="ajout_adulte" id="adulte">
                    </div>                   
                </div>
                <br>
                <div class="row flex-column flex-sm-row">
                    <div class="col-sm-6">
                    <p><span id="gras">Enfant </span> <?php echo $prix_enfant_semaine?> <br>3 à 11 ans<p>
                    </div>
                    <div class="col-sm-6">
                    <input type="number" name="ajout_enfant" id="enfant">
                    </div>                   
                </div>
                </div>  
            </div>
            <div class="col-sm-6">
                <img src="Images/welcomePark.jpg" alt="welcome" width="450px" id="park">
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
        <button class="btn btn-primary" name="generate_pdf">Confirmer</button>
        </div>
        <br>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            $currentDateTime = date('Y-m-d H:i:s');

            $id_visit=$_SESSION['visit_id'];
        
            $db1=$conn->prepare("INSERT INTO reservation(date_reserv,id_visit_fk) VALUES (?,?)");
            $db1->execute([$currentDateTime,$id_visit]);

            $sql2 = "SELECT id_reserv FROM reservation ORDER BY id_reserv DESC LIMIT 1";
            $result1 = $conn->query($sql2);
            if ($result1 && $result1->num_rows > 0) {
                $row1 = $result1->fetch_assoc();
                $id_reserv = $row1['id_reserv'];
                
            }

            $sql3="SELECT id_tarif FROM tarif2 WHERE descr='Billet semaine'";
            $result2=$conn->query($sql3);
            if ($result2 && $result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $id_tarif = $row2['id_tarif'];
                
            }

            $date_visite=$_POST['date_visite'];
            $quantite_adulte=$_POST['ajout_adulte'];
            $quantite_enfant=$_POST['ajout_enfant'];

            // echo $date_visite;
            // echo "<br>".$quantite_adulte;
            // echo "<br>".$quantite_enfant;
            // echo "<br>".$id_reserv;
            // echo "<br>".$id_tarif;
           
            $db2=$conn->prepare("INSERT INTO billet(date_visite,quantité_adulte,quantité_enfant,id_tarif_fk,id_reserv_fk) VALUES (?,?,?,?,?)");
            $db2->execute([$date_visite,$quantite_adulte,$quantite_enfant,$id_tarif,$id_reserv]);}
        ?>
        </div>


        <style>
            #park{
                border-radius: 20px;
            }
            #content{
                height: 50px;
                width: 100%;
                background-color: rgb(43, 174, 240);
                border-radius: 5px;
                color: white;
                box-shadow: 1px;
            }
            #container{
                background-color: rgb(248, 248, 248);
                height: 100%;
                border-radius: 5px;
                box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);

            }
            body{
                background-color: white;
                
            }
            #gras{
                font-weight: 500;
            }
            #dvisite,#adulte,#enfant{
                width: 80%;
                border-radius: 10px;
            }
            #gros{
                font-weight: 700;
            }
            #L{
                color: purple;
            }

        </style>

    </body>
</html>