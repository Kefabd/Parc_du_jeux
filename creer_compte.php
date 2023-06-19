
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
    <?php include 'navbar.php';?>
</head>
<body>
<?php

    $host='localhost';
    $dbname='parc2';
    $username='root';
    $password='';

    try{
        $pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        echo 'Connexion réussie à la base de données';
    } catch(PDOException $e) {
    echo 'Erreur de connexion à la base de données : '.$e->getMessage();
    }
    ?>

<div class="container">
    <div class="row centered-box">
      <div class="col-md-6" id="cont">
        <h2>Informations du compte</h2>
        <form method="POST">
            <table>
                <tr>
                    <td><label for="Nom">Nom</label></td>
                    <td><input type="text" name="nom_visit" required><br></td>
                </tr>
                <tr>
                    <td><label for="Prenom">Prenom</label></td>
                    <td><input type="text" name="prenom_visit" required><br></td>
                </tr>

                <tr>
                    <td><label for="Email">Email</label></td>
                    <td><input type="email" name="email_visit" required><br></td>
                </tr>

                <tr>
                    <td><label for="Tel">Télephone</label></td>
                    <td><input type="tel" name="tel_visit" required><br></td>
                </tr>

                <tr>
                    <td><label for="adresse">Adresse</label></td>
                    <td><input type="text" name="adrs_visit"><br></td>
                </tr>

                <tr>
                    <td><label for="Datenais">Date de naissance</label></td>
                    <td><input type="date" name="datenais_visit" required><br></td>
                </tr>

                <tr>
                    <td><label for="Mdp">Mot de passe</label></td>
                    <td><input type="password" name="mdp_visit" required><br></td>
                </tr>
                </table>
                <br>
                <div class="row d-flex justify-content-center align-items-center">
                <button class="btn" id="bouton" type="submit">Creer mon compte</button>
                </div>
            </div>
            </form>
        <?php
        
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom=$_POST['nom_visit'];
            $prenom=$_POST['prenom_visit'];
            $email=$_POST['email_visit'];
            $tel=$_POST['tel_visit'];
            $adrs=$_POST['adrs_visit'];
            $datenais=$_POST['datenais_visit'];
            $mdp=$_POST['mdp_visit'];
        
        $bd=$pdo->prepare("INSERT INTO visiteur(nom_visit,prenom_visit,adresse_visit,tel_visit,datenais_visit,email_visit,mdp_visit) VALUES (?,?,?,?,?,?,?)");
        $bd->execute([$nom,$prenom,$adrs,$tel,$datenais,$email,$mdp]);
        $to = $email;
        $subject = "Bienvenue chez Parc d'attraction";
        $message = "Cher(e) $nom $prenom,<br>

        Nous vous souhaitons la bienvenue sur notre site d'attraction ! Nous sommes ravis que vous ayez choisi de vous inscrire et de rejoindre notre communauté.<br>
        
        Notre site propose une large gamme d'attractions passionnantes et divertissantes pour tous les âges. Que vous soyez à la recherche de sensations fortes, de spectacles incroyables ou de moments de détente en famille, nous avons tout ce qu'il vous faut.<br>
        
        Nous vous invitons à parcourir notre site et à découvrir toutes les attractions que nous proposons. N'hésitez pas à contacter notre équipe si vous avez des questions ou besoin d'assistance. Nous sommes là pour vous aider !<br>
        
        Encore une fois, bienvenue sur notre site d'attraction. Nous espérons que vous passerez un moment inoubliable parmi nous.<br>
        
        Cordialement,
        ";
        

        $headers = "From: mohamedhammad25@gmail.com\r\n";
        $headers .= "Reply-To: mohamedhammad25@gmail.com\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


// Envoyer l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo "Soyez la bienvenue";
} else {
    echo "Erreur lors de l'envoi de l'e-mail.";
}
    }
 
        ?>
      </div>
      <br><br>
    </div>
  </div>

    <style>
    html, body {
      height: 100%;
    }

    .centered-box {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        background-color: rgb(248, 248, 248);
        border-radius: 30px;
        padding: 20px;
        margin: 40px;
    }
        #cont{
            height: 550px;
            
        }
        #bouton{
            width: 100%;
            background-color: purple;
            color: white;
            border-radius: 10px;
            font-weight: 200;
            font-size: 20px;
        }

        label{
            font-size: 20px;
            padding-right: 70px;
            padding-bottom: 20px;
            font-weight: 300;
        }
        input{
            width: 100%;
            border-color: white;
            border-radius: 5px;
        }
        h2{
            text-align: center;
            font-size: 40px;
            text-decoration: underline;
        }
    </style>
    <?php include "footer.php";?>
</body>
</html>
