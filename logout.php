<?php
session_start();

// Déconnexion de l'utilisateur
session_unset();
session_destroy();

// Redirection vers la page de connexion ou une page appropriée
header('Location:Authentif.php'); // Remplacez login.php par la page souhaitée
exit;
?>