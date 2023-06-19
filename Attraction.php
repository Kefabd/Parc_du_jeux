<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Attraction page</title>
  </head>
  <body>
    <header>
      <?php include 'navbar.php'; ?>  
    </header>
    <!-- Connexion a la database -->
    <?php
    try {
      $conn = new PDO('mysql:host=localhost;dbname=parc2','root','');
    } catch (PDOException $e) {
      die('Erreur de connexion: ' . $e->getmessage());
    }
    ?>
    <!-- Carousel -->
    <div id="demo" class="carousel slide " data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">


        <div class="carousel-item active" >
          <a href="#Forte">
            <img src="Images/carousel1.jpg"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#Famille">
            <img src="Images/famille.png"  class="d-block w-100">
          </a>
        </div>

        <div class="carousel-item">
          <a href="#Petit">
            <img src="Images/enfant.png"  class="d-block w-100">
          </a>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
    
    <!-- Attraction -->
    <div class="container justify-content-center">
      <h1 id="Forte">SENSATION FORTE</h1>
      <div class="row" style="margin-left: 5%">


       <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=1" id="redirection">
            <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=1");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];?>
              </h4>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=2" id="redirection">
            <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=2");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>

        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=3" id="redirection">
            <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=3");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>
      </div>
      <div class="row" style="margin-left: 5%">


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=4" id="redirection">
            <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=4");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>
      
    
      
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=5" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=5");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>
      
    
      
        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px;">
        <a href="Description.php?id=6" id="redirection">
        <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=6");
            $row=$sql->fetch();
            ?>
          <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
          <div class="card-body pl-3">
            <h4 class="card-title text-success">
            <?= $row['nom_attra'];
              ?>
            </h4><br>
            <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
          </div>
        </a>
        </div>
      
        
      </div>
    </div>

    <!-- *********************************************************************  -->

    <div class="container justify-content-center">
      <h1 id="Famille">Jeux en familles</h1>
      <div class="row" style="margin-left: 5%">


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=7" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=7");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=8" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=8");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?=$row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=9" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=9");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>

        
      </div>
      <div class="row" style="margin-left: 5%">


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=10" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=10");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=11" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=11");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=12" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=12");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?=$row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


      </div>
    </div>
    <!-- ****************************************************** -->
    <div class="container justify-content-center">
      <h1 id="Petit">Pour les petits</h1>
      <div class="row" style="margin-left:5%;">


        <div class="card shadow-lg m-4 col-md-4 col-lg-4 col-xxl-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=13" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=13");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=14" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=14");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?=$row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4 " style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=15" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=15");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>
      </div>

      <div class="row" style="margin-left: 5%">


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=16" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=16");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=17" id="redirection">
          <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=17");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?= $row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


        <div class="card shadow-lg m-4 col-md-4" style="width: 300px; height: 330px; border-radius: 20px">
          <a href="Description.php?id=18" id="redirection">
            <?php 
            $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=18");
            $row=$sql->fetch();
            ?>
            <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
            <div class="card-body pl-3">
              <h4 class="card-title text-success">
              <?=$row['nom_attra'];
                ?>
              </h4><br>
              <i class="bi bi-person-fill"> <?=$row['taille_min'];?>cm</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <i class="bi bi-people-fill"> <?= $row['capacite']; ?> Personnes</i>
            </div>
          </a>
        </div>


      </div>
    </div>
    <!-- lien pour billetttttttttttttttttttsssssssssss*************-->
    <div class="row" id="txt" >
      <div class="col-md-10">
        <h1 class="Attract">EN SAVOIR PLUS</h1>
        <p style="font-size:18px;">Venez découvrir nos billets et tarifs que le parc a à offrir. Que vous soyez seul, 
          en famille ou entre amis, <wbr> vous trouverez  des divertissements adaptés à tous les âges. 
          Plongez-vous dans l'aventure, défiez vos amis et créez des souvenirs inoubliables.
          Venez découvrir nos horaires et tarifs. Réservez vos billets, nous vous attendons 
          avec impatience pour une journée remplie de joie et de plaisir !

        </p>
      </div>
      <div class="col-md-2">
        <a href="billets.php" class="btn btn-outline-success btn-lg" type="button">Billets</a><br><br>
        <a href="tarif.php" class="btn btn-outline-success btn-lg">Tarifs</a><br><br>
        <a href="horaire.php" class="btn btn-outline-success btn-lg">Horaires</a>
      </div>
    </div>



    <style>
      #demo{
         margin: 2%; 
      }
      div img{
        border: 2px solid white;
        border-radius: 20px;
      }
      .Attract{
        font-weight: bold;
        letter-spacing: 5px;
        word-spacing: 7px;
      }
      #txt{
        background-color: rgb(0,0,0,0.25);
        margin: 2%;
        border: 2px solid white;
        border-radius: 20px;
        padding: 3%;
      }
      #txt div a{
        width: 205px;
      }
      #Image-card{
        border-radius: 20px;
        height: 195px;
        margin-left: 1%;
        width: 268px;
      }
      h1 div div{
        width: 300px; 
        height: 310px; 
        border-radius: 20px;
      }
      #redirection{
        color: inherit;
        font-size: inherit;
        text-decoration: none;
      }
    </style>
    <?php include 'footer.php'; ?>
  </body>

</html>