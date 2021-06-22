<?php

class Combat
{
    public static function combatEntreJoueur(Personnage $personnage, Personnage $personnage2)
    {
        while ($personnage->getDegatsRecus() < 100 && $personnage2->getDegatsRecus() < 100)
        {
            $personnage->frapper($personnage2);
            $personnage2->frapper($personnage);
        }
    }
}
