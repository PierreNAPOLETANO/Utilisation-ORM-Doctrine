<?php

class KingOfTheFHill extends Fight
{
    private $playersList;

    public static function fight()
    {
        for ($i = 0; $i < count($playersList); $i++){
            // if ($playersList[$i]->hit($playersList[$i+1]) == Fighter::IS_DEAD) {
            //     echo $playersList[$i]->getName() . "\n";
            //     echo $playersList[$i]->getName().' remporte le combat'.PHP_EOL;
            //     break;
            // }
            parent::startFight($playersList[$i], $playersList[$i+1]);
        }
    }
}