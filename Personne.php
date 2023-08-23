<?php

class Personne
{
    const NB_HEURES_TRAVAIL = 8.0;

    protected $nom;
    protected float $compteEnBanque;

    private float $salaire;

    private $photo; // Type non spécifié pour la photo

    private $animaux = [];

    public function __construct(string $nom, float $compteEnBanque, float $salaire, $photo, $animaux = [])
    {

        $this->nom = $nom;
        $this->compteEnBanque = $compteEnBanque;
        $this->salaire = $salaire;
        $this->photo = $photo;
        $this->animaux = $animaux;
    }

    public function getNom(): string
    {
        if ($this->nom == "") {
            return "nom non defini";
        } else {
            return $this->nom;
        }
    }

    public function getCompteEnBanque(): float
    {
        if ($this->compteEnBanque == "") {
            return ("Compte en banque non defini");
        } else {
            return $this->compteEnBanque;
        }
    }


    public function travailler8h() {
        $this->compteEnBanque += $this->salaire * self::NB_HEURES_TRAVAIL;
        // Si vous avez besoin d'ajouter 8 heures au travail, assurez-vous d'avoir un attribut correspondant
        // $this->nb_heures_travail += 8; // Ceci nécessite une propriété $nb_heures_travail dans la classe
    }

    public function getNbHeuresTravail(): float
    {
        return self::NB_HEURES_TRAVAIL; // Pas besoin de $this ici car c'est une constante de classe
    }

    public function getSalaire(): float
    {
        if ($this->salaire == !null) {
            return $this->salaire;
        } else {
            return ("Salaire non defini");
        }
    }

    public function setPhoto($photo) {
        $this->photo = $photo; // Utilisez '=' au lieu de '=='
    }

    public function getPhoto() {
        return $this->photo;
    }
    public function addAnimal(Animal $animal) {
        $this->animaux[] = $animal;
    }
    public function getNombreAnimaux() {
        return $this->animaux;
    }
}