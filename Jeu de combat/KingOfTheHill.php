<?php


class KingOfTheHill
{
    private $fighters = [];
    private static $counter = 1;

    public function __construct(array $fighters)
    {
        $this->fighters = $fighters;
    }

    public function start()
    {
        shuffle($this->fighters);
        $fighter1 = array_shift($this->fighters);
        $fighter2 = array_shift($this->fighters);

        $this->match($fighter1, $fighter2);
    }

    private function match(Fighter $fighter1, Fighter $fighter2)
    {
        echo 'Bienvenue au match n°'.self::$counter.' opposant '.$fighter1->getName(). ' à '.$fighter2->getName().PHP_EOL;
        $winner = Fight::startFight($fighter1, $fighter2);
        $winner->setDammage(0);
        self::$counter++;

        if (count($this->fighters) > 0) {
            $this->match($winner, array_shift($this->fighters));
        } else {
            echo 'Et le grand vainqueur est : '.$winner->getName().PHP_EOL;
        }
    }
}
