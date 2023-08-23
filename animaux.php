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
    <div class="card p-4 shadow">
        <div class="card-body">
            <h1 class="text-center mb-4">Formulaire des Animaux</h1>
            <form action="traitement.php" method="post">
                <?php
                $nb_animaux = $_POST['nb_animaux'];
                for ($i = 0; $i < $nb_animaux; $i++) {
                    echo "<div class='mb-3'>
                                <label for='animal_nom_" . $i . "' class='form-label'>Nom de l'animal</label>
                                <input type='text' class='form-control' id='animal_nom_" . $i . "' name='animal_nom_" . $i . "' required>
                              </div>
                              <div class='mb-3'>
                                <label for='animal_type_" . $i . "' class='form-label'>Type de l'animal</label>
                                <select class='form-control' id='animal_type_" . $i . "' name='animal_type_" . $i . "' required>
                                    <option value='chat'>Chat</option>
                                    <option value='chien'>Chien</option>
                                </select>
                              </div>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Suivant</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
