<?php

require './autoload.php';

$playersList = array();
$fighter1 = new Fighter('Pierre', Fighter::MEDIUM_STRENGTH);
$fighter2 = new Fighter('Felipe', Fighter::LOW_STRENGTH);
$fighter3 = new Fighter('Tom', Fighter::HIGH_STRENGTH);
$fighter4 = new Fighter('Percy', Fighter::LOW_STRENGTH);
$fighter5 = new Fighter('Lea', Fighter::HIGH_STRENGTH);
$fighter6 = new Fighter('Camille', Fighter::MEDIUM_STRENGTH);
$fighter7 = new Fighter('Julie', Fighter::MEDIUM_STRENGTH);
$fighter8 = new Fighter('Alexis', Fighter::HIGH_STRENGTH);
$fighter9 = new Fighter('Ang�lique', Fighter::LOW_STRENGTH);
$fighter10 = new Fighter('Bastien', Fighter::LOW_STRENGTH);

// Fight::startFight($fighter1, $fighter2);

$playersList = [
    $fighter1,
    $fighter2,
    $fighter3,
    $fighter4,
    $fighter5,
    $fighter6,
    $fighter7,
    $fighter8,
    $fighter9,
    $fighter10,
];

// Fight::startFight($playersList);

// for ($i = 0; $i < count($playersList); $i++){
//     if ($playersList[$i]->hit($playersList[$i+1]) == Fighter::IS_DEAD) {
//         echo $playersList[$i]->getName() . "\n";
//         echo $playersList[$i]->getName().' remporte le combat'.PHP_EOL;
//         break;
//     }
// }

KingOfTheFHill::fight();