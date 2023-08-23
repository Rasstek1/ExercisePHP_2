<?php

//session_start(); // Pas besoin deja demarrer dans Bob.php

require 'Bob.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $CompteEnBanque = $_POST['CompteEnBanque'];
    $nb_heures_travail = $_POST['nb_heures_travail'];
    $salaire = $_POST['salaire'];
    $photo = $_POST['photo'];

    $targetDir = "uploads/";// Initialise le répertoire cible pour le téléchargement des photos de profil.

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true); // Crée le répertoire s'il n'existe pas.
    }

    if ($_FILES["photo"]["error"] > 0) {
        $_SESSION["error"] = "Erreur lors du téléchargement : " . $_FILES["photo"]["error"]; // Stocke l'erreur dans la session si le téléchargement échoue.
        header("Location: confirmation.php");
        exit;
    }

    $photoName = basename($_FILES["photo"]["name"]);
    $targetPath = $targetDir . $photoName;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetPath)) { // Déplace le fichier téléchargé vers le répertoire cible.
        $Bob = new Bob($prenom, $CompteEnBanque, $nb_heures_travail, $salaire, $photoName); // Crée un objet de profil avec les données récupérée

        $_SESSION["Bob"] = $_SESSION["Bob"] ?? []; // Si non défini, initialise un tableau vide pour stocker les profils.
        $_SESSION["Bob"][] = $Bob; // Ajoute le nouveau profil au tableau de profils dans la session.
        $_SESSION["targetPath"] = $targetPath; // Stocke le chemin vers la photo dans la session, utilisé dans le fichier de confirmation.
        $_SESSION["currentBob"] = serialize($Bob); // Sérialise l'objet de profil pour le stocker dans la session.
    } else {
        $_SESSION["error"] = "Erreur lors du déplacement du fichier téléchargé."; // Stocke un message d'erreur dans la session si le déplacement du fichier échoue.
    }

    header("Location: index.php"); // Redirige vers la page de confirmation où les données seront affichées.
}