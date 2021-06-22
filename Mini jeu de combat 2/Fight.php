<?php

class Fight
{
    public static function startFight(Fighter $fighter1, Fighter $fighter2)
    {
        while (true) {
            if ($fighter1->hit($fighter2) == Fighter::IS_DEAD) {
                echo $fighter1->getName().' remporte le combat'.PHP_EOL;
                break;
            }

            if ($fighter2->hit($fighter1) == Fighter::IS_DEAD) {
                echo $fighter2->getName().' remporte le combat'.PHP_EOL;
                break;
            }
        }
    }
}
