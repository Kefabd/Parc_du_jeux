<?php session_start() ?>
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
		<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="/PROJETSIPHP/js/bootstrap.min.js"></script>


	<style>

  .bi-person-fill {
    font-size: 3em; /* Modifiez cette valeur pour ajuster la taille */
  }
	html, body {
  height: 100%;
  margin: 0;
  padding: 0;

}

.surbrillance:hover{
  text-shadow: 0 0 30px black ;
  background-clip: text;
}

	table {
		color: purple; /* Couleur d'écriture du texte du tableau */
			}

	.tooltip {
		position: relative;
		display: inline-block;
		cursor: pointer;
		color: none;

	}

	.tooltip:hover .tooltiptext {
		display: block;
	}

	.tooltiptext {
		display: none;
		position: absolute;
		top: 20px;
		left: 0;
		padding: 10px;
		text-align: center;
		line-height: 100%;
	}
	a{
		color: purple;
		text-decoration: none ;
		background: none;/* Annuler le soulignement */
	}


	.tooltip {
	  margin-left: 20px; /* Ajustez la marge selon vos besoins */
	}
	@media (max-width: 768px) {
  #accueil,#parc {
    display: none;
  }
	#qa,#infos {
    text-align: left;

}
}
.container {
  display: flex;
}
.container2 {
  display: flex;
  justify-content: flex-end;
}
.navbar-logo {
  width: 50px; /* Définir la largeur souhaitée */
  height: auto; /* Laisser la hauteur ajuster proportionnellement */
  margin: 0; /* Réinitialiser les marges par défaut */
  display: flex;
  align-items: center;
  justify-content: center;
}
.icon-container {
      display: flex;
      align-items: center;
    }

    .icon-container .bi {
      margin-right: 15px; /* Ajoutez un espace entre les icônes */
    }

    .search-icon-container {
      justify-content: start; /* Modifiez cette valeur pour ajuster l'emplacement horizontal */
    }

    .person-icon-container {
      justify-content: end; /* Modifiez cette valeur pour ajuster l'emplacement horizontal */
    }
		.navbar .navbar-nav .nav-link {
      font-weight: bold;
    }
		.sub-menu {
  display: none; /* Masquer les sous-menus par défaut */
	font-weight: bold;
}
button{
	color: blueviolet;
}

li:hover > .sub-menu {
  display: flex;; /* Afficher les sous-menus au survol de l'élément parent */
  flex-direction: row; /* Afficher les sous-menus horizontalement */
  position: absolute; /* Positionner les sous-menus par rapport à l'élément parent */
  top: 100%; /* Positionner les sous-menus en dessous de l'élément parent */
  left: 0; /* Aligner les sous-menus à gauche de l'élément parent */
}
li > .sub-menu {
  font-weight: inherit; /* Hérite de la propriété font-weight du parent */
}
.carousel-caption h5 {
font-size: 24px;
font-weight: bold;
}

.carousel-caption p {
font-size: 16px;
}
.sticky-footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}
.hidden-footer {
  visibility: hidden;
  transition: visibility 0.3s ease;
}
header {
  margin-left: 100px;
}
.image-text-container {
  display: flex;
  align-items: center;
}

.image-text-container .text {
  margin-left: 10px;
}
.image-number-container {
  display: flex;
  align-items: center;
}

.image-number-container img {
  width: 50%;
  height: 50%;
  margin-right: 10px;
}
.custom-height {
  height: 200px; /* Remplacez 200px par la hauteur souhaitée */
  width:400px;
}
</style>
</head>

 <body>
 <?php include "navbar.php";?>
 <script>
window.addEventListener('scroll', function() {
  var scrollPosition = window.pageYOffset;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  if (scrollPosition + windowHeight >= documentHeight) {
    // L'utilisateur a atteint la fin de la page
    document.querySelector('footer').classList.remove('hidden-footer');
  } else {
    // L'utilisateur n'a pas encore atteint la fin de la page
    document.querySelector('footer').classList.add('hidden-footer');
  }
});
</script>

<script>
function displaySubMenu(show,id) {
  var sousMenu = document.getElementById(id);
  if (show) {
    sousMenu.classList.add("show");
  } else {
    sousMenu.classList.remove("show");
  }
}

function adjustContentMargin() {
  var footerHeight = document.querySelector('.sticky-footer').offsetHeight;
  document.body.style.marginBottom = footerHeight + 'px';
}

// Appeler la fonction lors du chargement initial de la page
window.addEventListener('load', adjustContentMargin);
// Appeler la fonction lors du redimensionnement de la fenêtre
window.addEventListener('resize', adjustContentMargin);
</script>

<div id="carouselExample" class="carousel slide  text-white border rounded " data-bs-ride="carousel" data-bs-interval="2000">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="Images/ferris-wheel-against-blue-sky-with-clouds.jpg" class="d-block w-100" alt="Slide 1">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="text-danger">Découvre nos roues de joie !</h4>
				<a href="Attraction.php"><button class="btn btn-outline-dark btn-lg">Je découvre</button></a>
			</div>
		</div>
		<div class="carousel-item">
			<img src="Images/ferris-wheel.jpg" class="d-block w-100" alt="Slide 2">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="text-danger">Découvre nos roues de joie !</h4>
				<center><a href="Attraction.php" class="btn btn-outline-dark btn-lg " style="color:purple;" type="button">Je découvre !</a></center>
			</div>
		</div>
	</div>
</div>

<br><br>	
<div class="col-md 8">
		<center><h1 class="Attract">LE FERRIS</h1></center>
		<div class="container">
		<font color="black">
			<p style=" font-size:18px;">
			Découvrez le frisson ultime au cœur de notre parc d'attraction 
	        : le Ferris ! Montez à bord de cette imposante roue et préparez-vous à une expérience inoubliable. 
	        Laissez-vous emporter par des vues à couper le souffle, surplombant tout le parc et ses environs. 
	        Que ce soit en journée avec une vue panoramique sur le paysage environnant, ou en soirée lorsque les lumières de la ville scintillent, 
	        chaque tour vous offrira des moments de pur émerveillement. Installez-vous confortablement et profitez de cette incroyable aventure qui 
	        fera palpiter votre cœur et vous laissera des souvenirs inoubliables. Le Ferris du parc d'attraction : une expérience enivrante qui vous 
	        transportera au sommet du bonheur !</p>
		</font>
	</div>
</div>
<div class="row">
      
      <div class="col-md-12">
        <center><a href="Attraction.php" class="btn btn-outline-dark btn-lg" style="color:purple;" type="button">Regarde ici !</a></center>
      </div>
	  <br><br>
<div class="row" id="txt" >
	<div class="col-md 8">
		<center><h1 class="Attract">LES ATTRACTIONS</h1></center>
		<div class="container">
		<font color="black">
			<p style=" font-size:18px;">
			Découvrez un monde de merveilles et de sensations inoubliables dans notre parc captivant. 
			Plongez dans l'aventure en explorant des attractions palpitantes qui vous laisseront sans voix.
			Des montagnes russes vertigineuses vous propulseront à des vitesses fulgurantes, tandis que les manèges à sensation vous feront tourbillonner dans tous les sens. 
			Laissez-vous émerveiller par des spectacles époustouflants mettant en scène des acrobates talentueux et des animaux fascinants. 
			Nos attractions familiales offrent des moments de joie et de rires partagés, créant des souvenirs précieux pour tous. 
			Que vous soyez un aventurier en quête d'adrénaline ou à la recherche de moments magiques, notre parc regorge de surprises qui raviront les visiteurs de tous âges. 
			Venez vivre une expérience inégalée et laissez-vous envoûter par les attractions uniques de notre parc !!</p>
		</font>
	</div>
</div>
<div class="row" id="txt" >
      <div class="col-md-12">
        
	  <center><a href="Attraction.php" class="btn btn-outline-dark btn-lg" style="color:purple;" type="button">Regarde ici !</a></center>
      </div>
</div>
<br><br>
<div id="carouselExample" width=50% heigh=50% alt="example"class="img-fluid rounded"style="float:right" class="carousel slide  text-white border rounded h-5 w-60" data-bs-ride="carousel" data-bs-interval="2000">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img  src="Images/dandf.jpg" class="d-block w-100" alt="Slide 1">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="text-white">Besoin de décomprésser en famille ? Un manége c'est l'idéal!</h4>
				<a href="tarif.php" class="btn btn-outline-dark btn-lg" style="color:purple;" type="button">Nos tarifs</a>
			</div>
		</div>
		<div class="carousel-item">
			<img  src="Images/twof.jpg" class="d-block w-100" alt="Slide 2">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="text-white">Soirée post boulot , quoi de mieux que des sensations fortes ?</h4>
				<a href="tarif.php"><button  style="color:purple;" class="btn btn-success">Nos tarifs</button></a>
			</div>
		</div>
	</div>
<div class="row" id="txt" >
	<div class="col-md 8">
		<center><h1 class="Attract">Nos réstaurants</h1></center>
		<div class="container">
			<font color="black">
				<p style=" font-size:18px;">
				Découvrez un festival de saveurs et de délices dans les restaurants de notre parc enchanteur. 
			    Nos établissements gastronomiques vous invitent à un voyage culinaire exquis, où chaque bouchée est une véritable expérience gustative.
			    Des chefs talentueux préparent des plats raffinés avec des ingrédients frais et de saison,
			    offrant une cuisine créative qui ravira les papilles les plus exigeantes.
			    Que vous préfériez les mets traditionnels ou les cuisines du monde, 
			    notre sélection diversifiée de restaurants saura satisfaire tous les palais. 
			    Dégustez des plats succulents dans une ambiance chaleureuse et conviviale, 
			    ou optez pour une expérience gastronomique élégante et sophistiquée. De plus, 
			    nos restaurants offrent des options adaptées à tous les régimes alimentaires, 
			    garantissant une expérience culinaire accessible à tous. Venez vous régaler dans nos restaurants 
			   e t laissez-vous emporter par une symphonie de saveurs qui éveilleront vos sens à chaque bouchée.</p>
		    </font>
	    </div>
    </div>
</div>
<div id="carouselExample" width=50% heigh=50% alt="example"class="img-fluid rounded"style="float:right" class="carousel slide  text-white border rounded h-5 w-60" data-bs-ride="carousel" data-bs-interval="2000">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img  src="Images/couscous.jpg" class="d-block w-100" alt="Slide 1">
			<div class="carousel-caption d-none d-md-block">
				<a href=""></a><h4 class="text-white">Envie Marocaine</h4>
				<center><a href="#" class="btn btn-outline-dark btn-lg" style="color:purple;" type="button">Réservez votre table !</a></center>
			</div>
		</div>
		<div class="carousel-item">
			<img  src="Images/pizza.jpg" class="d-block w-100" alt="Slide 2">
			<div class="carousel-caption d-none d-md-block">
				<h4 class="text-white">Envie Italienne</h4>
				<center><a href="#" class="btn btn-outline-light btn-lg" style="color:purple;" type="button">Réservez votre table !</a></center>
			</div>
		</div>
	</div>
</div>

	<br>  <!-- Footer -->
	<br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br>  <br><br> <br><br> <br><br> <br><br> 
<?php include "footer.php";?>
</body>

</html>
