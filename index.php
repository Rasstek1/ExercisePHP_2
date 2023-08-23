<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>La vie de Bob</title>
</head>

<body>


<div class="bg-light text-center py-3" style="background-color: #f0f0f0;">
    <h4>La vie de Bob</h4>
</div>
<div class="container mt-4">

    <h1>Bob, Mitaine et Roboto</h1>
    <p id="date"></p> <!-- La date sera ajoutée ici par PHP -->
    <div class="row">
        <div class="col-md-6">
            <form action="votre-fichier-de-traitement.php" method="post">
                <div class="card">
                    <img src="image-path" class="card-img-top" alt="Image pour Bob">
                    <div class="card-body">
                        <h2 class="card-title">Titre</h2>
                        <p>Argent disponible : <span name="argent_disponible">Votre valeur ici</span></p>
                        <p>Taux horaire : <span name="taux_horaire">Votre valeur ici</span></p>
                        <p>Poste : Programmeur</p>
                        <button type="submit" class="btn btn-primary">Travailler 8h</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="votre-fichier-de-traitement.php" method="post">
                <div class="card">
                    <img src="image-path" class="card-img-top" alt="Image pour Mitaine">
                    <div class="card-body">
                        <h2 class="card-title">Titre</h2>
                        <p>Dernier repas :</p>
                        <p>À faim :</p>
                        <button type="submit" class="btn btn-primary">Nourrir Mitaine</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="votre-fichier-de-traitement.php" method="post">
                <div class="card">
                    <img src="image-path" class="card-img-top" alt="Image pour Roboto">
                    <div class="card-body">
                        <h2 class="card-title">Titre</h2>
                        <p>Dernier repas :</p>
                        <p>À faim :</p>
                        <button type="submit" class="btn btn-primary">Nourrir Roboto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-2">
        <a href="page_2.php" class="btn btn-secondary">Modifier les photos de profil</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
