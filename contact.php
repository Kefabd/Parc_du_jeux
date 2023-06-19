<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parc2";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Connexion échouée : " . $conn->connect_error);
}

$email = $_POST['email'] ?? "";
$nom = $_POST['nom'] ?? "";
$sujet = $_POST['sujet'] ?? "";
$msg = $_POST['message'] ?? "";

$sql = $conn->prepare("INSERT INTO contact (nom_contact, email_contact, sujet, msg) VALUES (?, ?, ?, ?)");
$sql->bind_param("ssss", $nom, $email, $sujet, $msg);

if ($sql->execute()) {
  $successMessage="Votre message a été envoyé avec succès.";
} else {
  $errorMessage="Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
}

$sql->close();
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Parc d'attractions - Aide et Contact</title>
  <!-- Lien vers la feuille de style Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Style personnalisé pour la page */
    body {
      padding: 20px;
    }

    nav {
      margin-bottom: 20px;
    }

    h1, h2, h3 {
      margin-top: 30px;
    }

    form {
      margin-top: 20px;
    }
    button{
      background
    }
   
  </style>
</head>
<body>
  <main>
    <div class="container">
      <h1>Aide et Contact</h1>

      <section id="faq">
        <h2>FAQ</h2>
        <!-- Liste des questions fréquemment posées -->
        <ul>
          <li>
            <h3>Est-il possible d'acheter des billets aux caisses d'entrée du Parc ?</h3>
          <p>Il est possible d'acheter des billets aux caisses d'entrée du Parc. Néanmoins, pour faciliter votre accès nous vous conseillons d'acheter votre billet à l'avance. En cas de forte affluence, l'accès au Parc n'est pas garanti. </p>
          </li>
          <li>
            <h3>Comment puis-je acheter des billets en ligne ?</h3>
            <p>Vous pouvez acheter des billets en ligne en vous rendant sur notre page de réservation et en suivant les étapes indiquées.</p>
          </li>
          <!-- Ajoutez d'autres questions et réponses -->
        </ul>
      </section>

      <section id="contact">
        <h2>Nous contacter</h2>
        <p>Pour toute question ou demande d'assistance, veuillez remplir le formulaire ci-dessous ou nous contacter aux coordonnées suivantes :</p>

        <!-- Formulaire de contact -->
        <form action="" method="post">
          <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>

          <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" required><br>

        <label for="message">Message :</label>
        <textarea id="message" name="msg" rows="5" required></textarea><br>

        <button type="submit" class="btn btn-primary">Envoyer</button>
<!-- Affichage des messages -->
<?php if (!empty($successMessage)) : ?>
  <div class="alert alert-success mt-4"><?php echo $successMessage; ?></div>
<?php endif; ?>

<?php if (!empty($errorMessage)) : ?>
  <div class="alert alert-danger mt-4"><?php echo $errorMessage; ?></div>
<?php endif; ?>

          </div>
        </form>
      </section>
    </div>
  </main>
</body>
</html>