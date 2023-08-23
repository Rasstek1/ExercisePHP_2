<?php

class Animal {
    private string $nom;
    private string $type;

    private string $son;

    private bool $faim;

    public function __construct($nom, $type, $son, $faim) {
        $this->nom = $nom;
        $this->type = $type;
        $this->son = $son;
        $this->faim = $faim;
    }

    public function getNom(): string {
        if ($this->nom == "") {
            return "Nom non défini";
        }
        return $this->nom;
    }

    public function getType(): string {
        if ($this->type == "") {
            return "Type non défini";
        }
        return $this->type;
    }

    public function getSon(): string {
        $type = strtolower($this->type);

        if ($type == "chat") {
            return "Miaou";
        } elseif ($type == "chien") {
            return "Ouaf";
        } else {
            return "Son non défini";
        }
    }

    // Méthode pour vérifier si l'animal a faim
    public function aFaim(): bool {
        return $this->faim;
    }

    // Méthode pour nourrir l'animal
    public function manger() {
        $this->faim = false;
        echo $this->nom . " a mangé et n'a plus faim.\n";
    }


}