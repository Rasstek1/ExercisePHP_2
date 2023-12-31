<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire Animaux</title>
</head>
<body>
<div class="container mt-5">
    <h1>Profiles</h1>
    <div class="card p-3 shadow">
        <div class="profile-section">
            <?php
            session_start();

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            require 'Personne.php';

            if (isset($_SESSION["error"])) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $_SESSION["error"];
                echo '</div>';
                unset($_SESSION["error"]); // pour effacer le message d'erreur après l'avoir affiché
            }

            // Vérification de la présence des données de session
            if (!isset($_SESSION["targetPath"])) {
                die("Erreur: La variable targetPath de la session est manquante.");
            }

            if (!isset($_SESSION["profiles"])) {
                die("Erreur: La variable profiles de la session est manquante.");
            }
            // Récupération des données de la session
            ?>




            <?php if (isset($_SESSION["profiles"])): ?>
                <?php foreach ($_SESSION["profiles"] as $profileKey => $serializedPersonne):
                    $Personne = unserialize($serializedPersonne); // Désérialisez l'objet ici

                    ?>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">

                                <img src="uploads/<?php echo $Personne->getPhoto(); ?>" class="card-img"
                                     alt="Photo de profil">
                                <!-- Mettez le bon chemin vers l'image -->
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <h4 class="card-title"><?php echo $Personne->getNom(); ?></h4>
                                    <div class="card-body">


                                        <p><strong>Compte en Banque :</strong> <?php echo $Personne->getCompteEnBanque(); ?>$Can</p>
                                        <p><strong>Salaire :</strong> <?php echo $Personne->getSalaire(); ?>$Can</p>
                                        <p><strong>Nombre d'Animaux :</strong> <?php echo $Personne->getNombreAnimaux(); ?></p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun profil n'a été créé pour le moment.</p>
            <?php endif; ?>
        </div> <!-- Fin de la div profile-section -->
    </div> <!-- Fin de la div card -->
</div> <!-- Fin de la div container -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
