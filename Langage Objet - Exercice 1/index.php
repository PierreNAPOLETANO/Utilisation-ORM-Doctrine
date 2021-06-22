<?php

require 'Personnage.php';

$perso = new Personnage(10, 0);
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
$perso->gainXp();
echo "Expérience : " . $perso->getExperience();
echo "\n";
echo "Force : " . $perso->getForce();
