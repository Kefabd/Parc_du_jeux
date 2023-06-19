<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
  
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

  
    <style>
  .sub-menu {
    display: none;
    font-weight: bold;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
  }

  li:hover > .sub-menu {
    display: flex;
    flex-direction: row;
  }

  li > .sub-menu > li {
    display: inline-block;
    margin-right: 10px; /* Ajoute un espacement horizontal entre les mots des sous-menus */
  }

  li > .sub-menu > li:last-child {
    margin-right: 0; /* Supprime l'espacement droit du dernier mot du sous-menu */
  }

  li > .sub-menu {
    font-weight: inherit;
  }
</style>

  </head>
  <body>
   
    <nav  class="navbar navbar-expand-lg">
			<a class="navbar-brand fit-content surbrillance" href="Acceuil.php">
				<img src="Images/p3.jpeg" width="100" height="100" class="navbar-logo" alt="">
			</a>
			<button class="navbar-toggler " style="color:purple;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle surbrillance active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Votre parc
						</a>
						<ul  class="dropdown-menu dropdown-menu-white sub-menu" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class=" surbrillance dropdown-item" href="Attraction.php">Attraction</a></li>
							<li><a class="surbrillance dropdown-item" href="resto.php">Restaurant</a></li>
              <li><a class="surbrillance dropdown-item" href="billets.php">Billeterie</a></li>
						</ul>

					</li>
					<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle active surbrillance" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Infos pratiques
								</a>
								<ul  class="dropdown-menu dropdown-menu-white sub-menu" aria-labelledby="navbarDarkDropdownMenuLink">
									<li><a class=" surbrillance dropdown-item" href="horaire.php">Horaires</a></li>
									<li><a class="surbrillance dropdown-item" href="contact.php">Contact</a></li>
									<li><a class="surbrillance dropdown-item" href="tarif.php">Tarifs</a></li>
								</ul>
							</li>
						</ul>
            <ul class="navbar-nav">
              
          </ul>
					</div>
				</ul>
			</div>
       <!--Right side-->


       <ul class="navbar-nav m-sm-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="authentif.php"><i class="bi bi-person"></i>S'authentifier</a>
                  </li>
                  <?php
                      if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'visiteur') { 
                        ?>
                        <li class="nav-item">
                        <form action="logout.php" method="POST">
                          <button type="submit" class="nav-link" id="dcn">Déconnexion</button>
                      </form>
                      </li>
                    <?php 
                    }
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
      #dcn{
        border-color: white;
      }
    </style>

  </body>
</html>