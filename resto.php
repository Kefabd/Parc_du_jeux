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
    .card {
  height: 650px; /* Spécifiez la hauteur souhaitée pour toutes les cartes */
}

</style>
<body>
<html>
<?php include "navbar.php";?>
<div class="container">
<h1>FINIS DE JOUER ?</h1>
<p>Vous avez profitez de nos attractions, venez maintenant découvrir notre esprit culinaire</p>
</div>
<div class="container">
  <div class="row g-3">
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="Images/couscous.jpg" class="card-img-top" alt="Couscous">
                <h5 class="card-title">Soyez marocain</h5>
                <p>
                La cuisine marocaine est réputée pour sa richesse et sa diversité, résultat de l'influence de plusieurs cultures
                 et de la variété des ingrédients disponibles au Maroc.
                 Voici quelques éléments qui témoignent de la richesse de la cuisine marocaine :
                </p>
                <p class="card-text">
                    Envie Marrakchia : 100dhs <br>
                    Envie Fassia : 150dhs <br>  
                    Envie Jblia :200dhs <br>
                </p>
                <a href="#" class="btn btn-primary">Soyez marocain</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="Images/pizza2.jpg" class="card-img-top" alt="Couscous">
                <h5 class="card-title">Vers l'empire romaine</h5>
                <p class="card-text">
                    L'un des plats emblématiques de l'Italie est la pizza. La pizza est une base de pâte garnie de sauce tomate, 
                    de fromage et d'une variété de toppings, tels que des légumes, des viandes, des fruits de mer ou des herbes. 
                    Cuite au four, la pizza est appréciée pour sa croûte croustillante, sa sauce tomate savoureuse et 
                    son mélange harmonieux d'ingrédients.</p>
                    <p>
                        Pizza Margaritta : 60dhs <br>
                        Pizza Bolognaise : 50dhs<br>
                        Pizza Royale : 80dhs<br>
                        Pizza Calzone : 55dhs<br>
                    </p>
                <a href="#" class="btn btn-primary">Ma pizza</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="Images/frites.jpg" class="card-img-top" alt="Couscous">
                <h5 class="card-title">Special Frites</h5>
                <p class="card-text">L'arôme alléchant des frites fraîchement cuites et leur texture croustillante 
                    en font une collation populaire et réconfortante. Que ce soit en accompagnement d'un repas ou en en-cas à emporter,
                     un stand de frites offre une expérience savoureuse et rapide pour satisfaire vos envies de pommes de terre frites.
                </p>
                <p>
                        Frites Junior : 15dhs <br>
                        Frites Moyenne : 20dhs<br>
                        Frites Royale : 30dhs<br>
                        Frites Familiales : 45dhs<br>
                    </p>

                <a href="#" class="btn btn-primary">Mes frites</a>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "footer.php";?>
</body>
</html>

