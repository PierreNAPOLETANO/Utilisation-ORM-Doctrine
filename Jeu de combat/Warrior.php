<?php

Class Warrior extends Fighter
{
    public function dodgesABlow()
    {
        if(parent::receiveDammage(parent::$dammage))
        {
            parent::$nbHP += 0;
        }
    }

    public function highStrength(Fighter $fighter)
    {
        // if(parent::hit($fighter))
        // {
        //     parent::$dammage += 5;
        // }

        if ($fighter === $this) {
            trigger_error('On ne peut pas se frapper soi-même');
        }

        echo $this->getName().' attaque '.$fighter->getName().PHP_EOL;
        return $fighter->receiveDammage($this->getStrenght() + $this->getAdvantage());
    }
}