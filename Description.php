<?php 
    if(isset($_GET['id'])){
        try {
            $conn=new PDO('mysql:host=localhost;dbname=parc2','root','');
        } catch (PDOException $e) {
            die('Ereur de connexion: ' . $e->getmessage());
        }
        $sql= $conn->prepare("SELECT nom_attra , descr , taille_min , duree , capacite , image_attra FROM attraction WHERE id_attra=?");
        $sql->execute(array($_GET['id']));
        $row=$sql->fetch();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>description jeux</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
   
    
    <div class="container">
        <div class="row text-center" style="border-radius:20px; background-color:purple;">
            <h1 class="text-uppercase">
                <?=$row['nom_attra']; ?>

            </h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-5" id="text">
                <?=$row['descr']; ?>
            </div>
            
            <div class="col-md-7">
                <img src="<?= $row['image_attra']; ?>" alt="Description de l'image" class="img-fluid" id="image">
                <div class="image-overlay">
                    <div class="float-start ml-5 ">
                        <center>
                            <i class="bi bi-person-fill h5"></i>
                        </center>
                        <?= $row['taille_min']; ?>cm
                    </div>
                    <div class="float-end mr-5">
                        <center>
                            <i class="bi bi-people-fill h5 "></i>
                        </center>
                        <?= $row['capacite'] ; ?>Per
                    </div>
                    <div>
                        <center>
                            <i class="bi bi-clock-fill h5"></i>
                            <br>
                            <?= $row['duree']; ?>
                        </center>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <style>
        #image{
            border: 5px solid purple; 
            height: 480px; 
            width: 700px; 
            border-radius: 20px;
        }
        .image-overlay {
            background-color: rgba(0, 0, 0, 0.5); /* Couleur de fond transparente */
            color: white; /* Couleur du texte */
            position: absolute; /* Position absolue pour se superposer à l'image */
            bottom: 0; /* Alignement au bas de l'image */
            width: 96.5%; /* Largeur de la barre */
            height: 13%;
            padding: 8px; /* Espacement interne */
            border-radius: 20px;
        }
        #text{
            background-color: purple;
            font-size: 17px;
            font-family: 'Alfa Slab One', cursive;
            font-family: 'Lobster', cursive;
            font-family: 'Playfair Display', serif;
            font-family: 'Wix Madefor Display', sans-serif;
            margin-top: 4%;
            margin-bottom: 5%;
            border-radius: 20px;
            padding: 3%;
            height: 370px;
        }
    </style>
    <?php include 'footer.php'; ?>
</body>
</html>