<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Modifier les photos de profil</title>
</head>

<body>
<div class="bg-light text-center py-3" style="background-color: #f0f0f0;">
    <h4>La vie de Bob</h4>
</div>
<div class="container mt-4">
    <div class="mb-3">
        <p>Mitaine*</p>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Choisir un fichier</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Aucun fichier choisi</label>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <p>Bob*</p>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon02">Choisir un fichier</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                <label class="custom-file-label" for="inputGroupFile02">Aucun fichier choisi</label>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <p>Roboto*</p>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon03">Choisir un fichier</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                <label class="custom-file-label" display=none for="inputGroupFile03">Aucun fichier choisi</label>
            </div>
        </div>
    </div>
    <div class="mt-3" style="max-width: 300px;">
        <button class="btn btn-primary btn-block mb-2">Modifier photos de profil</button>
        <a href="index.php" class="btn btn-secondary btn-block">Retour à l'accueil</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
