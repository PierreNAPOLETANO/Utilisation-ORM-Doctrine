<?php

abstract class Fighter
{
    protected $name;
    protected $nbHP;
    protected $type;
    protected $strenght;
    protected $advantge;
    protected $dammage = 0;

    const LOW_STRENGTH = 10;
    const MEDIUM_STRENGTH = 50;
    const HIGH_STRENGTH = 90;

    const IS_DEAD = 1;
    const CONTINUE_FIGHT = 2;

    public function __construct(string $name, int $nbHP, string $type, int $strenght, int $advantage)
    {
        $this->name      = $name;
        $this->nbHP      = $nbHP;
        $this->type      = $type;
        $this->advantage = $advantage;
        $this->strenght  = $strenght;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNbHP(): string
    {
        return $this->nbHP;
    }

    public function setNbHP(string $nbHP): void
    {
        $this->nbHP = $nbHP;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getStrenght(): int
    {
        return $this->strenght;
    }

    public function setStrenght(int $strenght): void
    {
        $this->strenght = $strenght;
    }

    public function getDammage(): int
    {
        return $this->dammage;
    }

    public function setDammage(int $dammage): void
    {
        $this->dammage = $dammage;
    }

    public function getAdvantage(): int
    {
        return $this->advantage;
    }

    public function setAdvantage(int $advantage): void
    {
        $this->advantage = $advantage;
    }

    public function hit(Fighter $fighter)
    {
        if ($fighter === $this) {
            trigger_error('On ne peut pas se frapper soi-même');
        }

        echo $this->getName().' attaque '.$fighter->getName().PHP_EOL;
        return $fighter->receiveDammage($this->getStrenght());
    }

    public function receiveDammage(int $dammage)
    {
        echo $this->getName() . ' reçois '.$dammage.' dégats.'.PHP_EOL;

        $this->dammage += $dammage;

        if ($this->dammage >= 100) {
            return self::IS_DEAD;
        }

        return self::CONTINUE_FIGHT;
    }
}
