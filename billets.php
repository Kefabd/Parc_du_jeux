<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    </head>
  
    <body>
    <?php include 'navbar.php';?>
    <?php

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
    <!--SESSION-->


          <!--Billeterie-->
          <div class="container">
              <div class="col text-center">
                <h2 id="billets">BILLETS</h2>
                <div >
                <h3>Découvrez nos types de billets et <br>réservez vos places pour une aventure inoubliable!</h3>
                </div>
  
            </div>
            &nbsp;
            <div class="row">
                <h2>Nos billets de la saison:</h2>
            </div>
            &nbsp;
            <div class="container">
            <div class="row flex-column flex-sm-row">
                <div class="col-sm-4 text-center">
                    <div class="container" id="cont_bg">
                        <?php
                         $sql1 = "SELECT * FROM tarif2";
                         $result = $conn->query($sql1);

              
                         if ($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                                if($row['descr']=="Billet semaine"){
                                    $prix_adulte_semaine=$row['adulte'];
                                    $prix_enfant_semaine=$row['enfant'];
                                }
                                if($row['descr']=="Billet weekend"){
                                    $prix_adulte_weekend=$row['adulte'];
                                    $prix_enfant_weekend=$row['enfant'];
                                }
                                if($row['descr']=="billet premium"){
                                    $prix_adulte_premium=$row['adulte'];
                                    $prix_enfant_premium=$row['enfant'];
                                }
                                
                            }
                         }
                         else{
                            echo "Aucun billet disponible";
                         }

                        ?>
                        <h3 id="B" class="d-inline-block">BILLET SEMAINE</h3>
                        <div class="container" id="tarifs">
                            <div class="row">
                                <div class="col-6">
                                    <p><span id="gras">Tarifs adulte</span> <br>12 ans et plus <br><span id="prix"> <?php echo $prix_adulte_semaine?> dh</span></p>
                                </div>
                                
                                <div class="col-6">
                                     <p><span id="gras">Tarifs enfant</span> <br>3 à 11 ans <br> <span id="prix"><?php echo $prix_enfant_semaine ?> dh </span></p>
                                </div>
                            </div>
                            <div class="row">
                                <ul>
                                    <li class="text-left">De lundi à Vendredi</li>
                                    <li class="text-left">Inclus tous les jeux</li>
                                    <li class="text-left">Réservation minimum 7 jours avant votre visite</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col text-center">
                                        <a href="Reservation_semaine.php">
                                        <button class="btn btn-primary">Réserver</button>
                                </a>
                            </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
                <div class="col-sm-4 text-center">
                    <div class="container" id="cont_bg">
                        <h3 id="B" class="d-inline-block">BILLET WEEKEND</h3>
                        <div class="container" id="tarifs">
                        <div class="row">
                                <div class="col-6">
                                <p><span id="gras">Tarifs adulte</span> <br>12 ans et plus <br><span id="prix"> <?php echo $prix_adulte_weekend ?> dh </span></p>
                                </div>
                                
                                <div class="col-6">
                                <p><span id="gras">Tarifs enfant</span> <br>3 à 11 ans <br> <span id="prix"><?php echo $prix_enfant_weekend ?> dh </span></p>
                                </div>
                            </div>
                            <div class="row">
                                <ul>
                                    <li class="text-left">Samedi et Dimanche</li>
                                    <li class="text-left">Inclus tous les jeux</li>
                                    <li class="text-left">Réservation minimum 7 jours avant votre visite</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col text-center">
                            <a href="Reservation_weekend.php">
                                <button class="btn btn-primary">Réserver</button>
                            </a>
                            </div>
                            </div>
                        </div>    
                    </div>
                    
                </div>
                <div class="col-sm-4 text-center">
                    <div class="container" id="cont_bg">
                        <h3 id="B" class="d-inline-block">BILLET PREMIUN</h3>
                        <div class="container" id="tarifs">
                        <div class="row">
                                <div class="col-6">
                                <p><span id="gras">Tarifs adulte</span> <br>12 ans et plus <br> <span id="prix"> <?php echo $prix_adulte_premium ?> dh </span></p>
                                </div>
                                
                                <div class="col-6">
                                    <p><span id="gras">Tarifs enfant </span><br>3 à 11 ans <br><span id="prix"> <?php echo $prix_enfant_premium ?> dh</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <ul>
                                    <li class="text-left">7j/7</li>
                                    <li class="text-left">Inclus tous les jeux + Restauration</li>
                                    <li class="text-left">Date réservation illimitée</li>
                                </ul>
                            </div>
                            <br>
                            <hr>
                            <div class="row">
                            <div class="col text-center">
                                <a href="Reservation_premium.php">
                                <button class="btn btn-primary" id="bouton">Réserver</button>
                                </a>
                            </div>
                            </div>
                        </div>
                        
                    </div>    
                </div>
</div>
            </div>
          </div>
        </nav>
        <?php include "footer.php";?>
    </body>


    <style>

        #cont_bg{
            height: 340px;
            background-color: red;
            background-image: url("Images/manege-tournant.jpeg");
            border-radius: 10px;
    
        }
        #B{
            background-color: purple;
            border-radius: 10px;
            color: white;
        }
        #tarifs{
            height: 280px;
            background-color: white;
            border-radius: 10px;
        }
        #gras{
            font-weight: 500;
            text-decoration: underline;
        }
        #prix{
            font-weight: 500;
            font-size: 20px;
            color: blue;
        }
        #billets{
            color: Blue;
            font-size: 40px;
        }


      </style> 
</html>