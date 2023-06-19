
<?php

?>

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

    <?php
    session_start();
    ?>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg">

              <a class="navbar-brand" href="#">
                <img src="Images/p3.jpeg" width="100" height="100" alt="logo du parc">
              </a>
              <ul class="navbar-nav ">

                  <li class="nav-item">
                      <a class="nav-link " href="Attraction-modif.php"><span >Attraction</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="ajout_tarif.php">Tarifs</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="ajout_horaire.php">Horaire</a>
                  </li>

                
              </ul>
                  


                <!--Right side-->

              <ul class="navbar-nav m-sm-auto">
                  <?php
                      if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'employe') { 
                        ?>
                        <li class="nav-item">
                        <form action="logout.php" method="POST">
                          <button type="submit" class="nav-link">Déconnexion</button>
                      </form>
                      </li>
                    <?php }
                  ?>

              </ul>

    </nav>

<div>

</div>

    <style>
      .nav-link{
        color: purple;
        font-size: large;
        margin-right: 40px;
        font-weight: 500;
      }
    </style>

  </body>
</html>