<?php

class Witcher extends Fighter
{
    private string $magie;

    public function __construct(string $name, int $nbHP, string $type, int $strenght, int $advantage, string $magie)
    {
        parent::__construct($name, $nbHP, $type, $strenght, $advantage);
        $this->magie = $magie;
    }

    public function getMagie(): string
    {
        return $this->magie;
    }

    public function setMagie(string $magie): void
    {
        $this->magie = $magie;
    }

    public function castASpell(Fighter $fighter)
    {
        if ($fighter === $this) {
            trigger_error('On ne peut pas se frapper soi-même');
        }

        echo $this->getName().' attaque '.$fighter->getName().PHP_EOL;
        return $fighter->receiveDammage($this->getMagie());
    }
}