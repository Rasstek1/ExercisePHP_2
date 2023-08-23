<?php

session_start();
$personne = unserialize($_SESSION['personne']);

$nom_animal = $_POST['nom_animal'];
$type_animal = $_POST['type_animal'];

$animal = new Animal($nom_animal, $type_animal);
$personne->addAnimal($animal);

$_SESSION['personne'] = serialize($personne); // Mettre à jour la session avec la personne modifiée
