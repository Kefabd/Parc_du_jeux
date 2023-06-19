<?php
session_start();

if (isset($_SESSION['successMessage'])) {
  $message = $_SESSION['successMessage'];
  unset($_SESSION['successMessage']); // Supprimer le message de la session après l'avoir récupéré
} elseif (isset($_SESSION['errorMessage'])) {
  $message = $_SESSION['errorMessage'];
  unset($_SESSION['errorMessage']); // Supprimer le message de la session après l'avoir récupéré
} else {
  // Si aucun message n'est disponible, rediriger vers une autre page
  header("Location: contact.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Message</title>
  <!-- Lien vers la feuille de style Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Style personnalisé pour la page */
    body {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if (isset($message)) : ?>
      <div class="alert alert-<?php echo isset($_SESSION['successMessage']) ? 'success' : 'danger'; ?> mt-4">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
