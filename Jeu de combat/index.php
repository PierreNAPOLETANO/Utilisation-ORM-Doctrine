<?php

require './autoload.php';

$fighter1 = new Fighter('Gladiator', Fighter::MEDIUM_STRENGTH);
$fighter2 = new Fighter('Rufus', Fighter::LOW_STRENGTH);
$fighter3 = new Fighter('Maximus', Fighter::MEDIUM_STRENGTH);
$fighter4 = new Fighter('Zeus', Fighter::MEDIUM_STRENGTH);
$fighter5 = new Fighter('Athena', Fighter::LOW_STRENGTH);
$fighter6 = new Fighter('Rahan', Fighter::LOW_STRENGTH);
$fighter7 = new Fighter('Captain America', Fighter::MEDIUM_STRENGTH);
$fighter8 = new Fighter('Tintin', Fighter::LOW_STRENGTH);
$fighter9 = new Fighter('Milou', Fighter::HIGH_STRENGTH);
$fighter10 = new Fighter('Asterix', Fighter::LOW_STRENGTH);

$koth = new KingOfTheHill([$fighter1,$fighter2,$fighter3,$fighter4,$fighter5,$fighter6,$fighter7,$fighter8,$fighter9,$fighter10]);
$koth->start();
