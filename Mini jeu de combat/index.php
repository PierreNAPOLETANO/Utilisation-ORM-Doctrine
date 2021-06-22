<?php

require 'Personnage.php';
require 'Combat.php';

$joueur1 = new Personnage("Pierre", Personnage::MOYENNE_FORCE, 0);
$joueur2 = new Personnage("Felipe", Personnage::GRANDE_FORCE, 0);

/*
while($joueur1->getDegatsRecus() < 100 || $joueur2->getDegatsRecus() < 100)
{
    $joueur1->frapper($joueur2);
    $joueur2->frapper($joueur1);
}
*/

//$combat = new Combat();
//$combat->combatEntreJoueur($joueur1, $joueur1);
Combat::combatEntreJoueur($joueur1, $joueur1);

echo "Point de vie joueur 1 : " . $joueur1->getDegatsRecus() . "\n";
echo "Point de vie joueur 2 : " . $joueur2->getDegatsRecus() . "\n";
