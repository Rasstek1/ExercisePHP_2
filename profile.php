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
            if (!isset($_SESSION["targetPath"]) || !isset($_SESSION["currentUserProfile"])) {
                die("Erreur: Les données de session sont manquantes.");
            }
            // Récupération des données de la session
            $targetPath = $_SESSION["targetPath"];
            $userProfile = unserialize($_SESSION["currentUserProfile"]); ?>// Désérialisez l'objet ici

            <?php if (isset($_SESSION["profile"]) && !empty($_SESSION["profile"])): ?>
            <!-- Ici, votre boucle foreach -->
            <?php foreach ($_SESSION["profile"] as $profileKey => $Personne): ?>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="uploads/<?php echo $Personne->getPhoto(); ?>" class="card-img"
                                     alt="Photo de profil">
                                <!-- Mettez le bon chemin vers l'image -->
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $Personne->getNom(); ?></h5>"
                                    <div class="mb-3">
                                        <label for="nom"
                                               class="form-label">Nom </label>
                                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $Personne->getNom(); ?>"
                                               readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="compteEnBanque" class="form-label">Compte en
                                            Banque</label>
                                        <input type="number" class="form-control" id="compteEnBanque"
                                               name="compteEnBanque" value="<?php echo $Personne->getCompteEnBanque(); ?>" step="0.01" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="salaire"
                                               class="form-label">Salaire</label>
                                        <input type="number" class="form-control" id="salaire" name="salaire"
                                               value="<?php echo $Personne->getSalaire(); ?>" step="0.01" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nb_animaux" class="form-label">Nombre
                                            d'Animaux</label>
                                        <input type="number" class="form-control" id="nb_animaux" name="nb_animaux"
                                               value="<?php echo $Personne->getNombreAnimaux(); ?>" readonly>


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
