<?php

class Personnage
{
    // Attributs
    private string $name;
    private int $force;
    private int $degatsRecus;

    const PETITE_FORCE = 25;
    const MOYENNE_FORCE = 50;
    const GRANDE_FORCE = 75;

    // Constructeur
    public function __construct(string $nom, int $force, int $degatsRecus)
    {
        $this->nom         = $nom;
        $this->force       = $force;
        $this->degatsRecus = $degatsRecus;
    }

    // Getters et Setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function setForce(int $force)
    {
        $this->force = $force;
    }

    public function getDegatsRecus()
    {
        return $this->degatsRecus;
    }

    public function setDegatsRecus(int $degatsRecus)
    {
        $this->degatsRecus += $degatsRecus;
    }

    // Autre méthodes
    // public function frapper(Personnage $personnage, int $degats)
    public function frapper(Personnage $personnage)
    {
        // for ($i = 0; $i <= 100; $i++){
        //    $personnage->setDegatsRecus($degats);
        // }

        $personnage->setDegatsRecus($this->getForce());
        
        if ($personnage->getDegatsRecus() == 100)
            echo "Bravo, vous avez gagné";
    }

    public function recoitDegats(int $degats)
    {
        $this->setDegatsRecus($degats);
    }
}
