<?php
session_start();

session_start();
require 'Personne.php';

if (isset($_SESSION['currentUserProfile'])) {
    $personne = unserialize($_SESSION['currentUserProfile']);
    $personne->travailler8h();
    $_SESSION['currentUserProfile'] = serialize($personne);
}

header('Location: profile.php'); // Redirige vers la page de profil ou autre

?>
