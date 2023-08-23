<?php

session_start();

require 'Personne.php'; // Assurez-vous que le chemin est correct

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $nom = $_POST['nom'];
    $compteEnBanque = $_POST['compteEnBanque'];
    $salaire = $_POST['salaire'];
    $nb_animaux = $_POST['nb_animaux'];



    $targetDir = "uploads/";// Initialise le répertoire cible pour le téléchargement des photos de profil.

// Vérifier si un fichier a été téléchargé
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true); // Crée le répertoire s'il n'existe pas.
    }

    if ($_FILES["photo"]["error"] > 0) {
        $_SESSION["error"] = "Erreur lors du téléchargement : " . $_FILES["photo"]["error"]; // Stocke l'erreur dans la session si le téléchargement échoue.
        header("Location: profile.php");
        exit;
    }

    $photoName = basename($_FILES["photo"]["name"]);
    $targetPath = $targetDir . $photoName;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetPath)) { // Déplace le fichier téléchargé vers le répertoire cible.
        $Personne = new Personne($nom, $compteEnBanque, $salaire, $nb_animaux, $photoName ); // Crée un objet de profil avec les données récupérées.

        $_SESSION["profile"] = $_SESSION["profile"] ?? []; // Si non défini, initialise un tableau vide pour stocker les profils.
        $_SESSION["profile"][] = $Personne; // Ajoute le nouveau profil au tableau de profils dans la session.
        $_SESSION["targetPath"] = $targetPath; // Stocke le chemin vers la photo dans la session, utilisé dans le fichier de confirmation.
        $_SESSION["currentUserProfile"] = serialize($Personne); // Sérialise l'objet de profil pour le stocker dans la session.
        $_SESSION['nb_animaux'] = $nb_animaux;//a definir plus tard
    }
    else {
        $_SESSION["error"] = "Erreur lors du déplacement du fichier téléchargé."; // Stocke un message d'erreur dans la session si le déplacement du fichier échoue.
    }



}
// Rediriger vers la page pour ajouter les animaux
header('Location: profile.php');
exit
?>

