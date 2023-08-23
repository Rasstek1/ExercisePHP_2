<?php

session_start(); // Démarrage de la session PHP

//Creation de la classe Bob
class Bob
{
    private string $prenom;
    private float $CompteEnBanque;

    private float $nb_heures_travail;

    private float $salaire = 22.50;

    private $photo; // Type non spécifié pour la photo

    /********************************CONSTRUCTEUR*************************************/

    public function __construct(string $prenom, float $CompteEnBanque, float $nb_heures_travail, float $salaire, $photo)
    {
        $this->prenom = $prenom;
        $this->CompteEnBanque = $CompteEnBanque;
        $this->nb_heures_travail = $nb_heures_travail;
        $this->salaire = $salaire;
        $this->photo = $photo;

    }

    /********************************METHODES*************************************/

    public function getNom(): string
    {
        if ($this->prenom == "") {
            return "nom non defini";
        } else {
            return $this->prenom;
        }
    }

    /**
     * @return float
     */
    public function getCompteEnBanque(): float
    {
        if ($this->CompteEnBanque == "") {
            return ("Compte en banque non defini");
        } else {
            return $this->CompteEnBanque;
        }
    }

    public function getNbHeuresTravail(): float
    {
        if ($this->nb_heures_travail == "") {
            return ("nb heures travail non defini");
        } else {
            return $this->nb_heures_travail;
        }
    }

    public function getSalaire(): float
    {
        if ($this->salaire == "") {
            return ("salaire non defini");
        } else {
            return $this->salaire;
        }
    }
    public function getPhoto() {
        if ($this->photo == "") {
            return "Photo non définie";
        }
        return $this->photo;
    }


}






