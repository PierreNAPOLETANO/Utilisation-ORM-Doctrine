<?php

class Personnage
{
    private $prive = "Privé";

    public function __get($attribut)
    {
        if(isset($this->attribut))
        {
            echo $this->attribut . "\n";
        }
        else
        {
            echo "L'attribut $this->attribut n'existe pas \n";
        }
    }

    public function __set($attribut, $valeur)
    {
        echo "On a tenté d'assigner à l'attribut " . $attribut . " la valeur " . $valeur . "\n";
    }
}

$perso = new Personnage();
$perso->prive;
$perso->prive = 'Pierre';
$perso->test;