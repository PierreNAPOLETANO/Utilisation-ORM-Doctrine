<?php

class MaClasse
{
    private static $counter = 0; 
    
    public function __construct()
    {
        self::$counter++;
    }

    public function getCounter()
    {
        return self::$counter;
    }
}

$c = new MaClasse;
$c2 = new MaClasse;
$c3 = new MaClasse;

echo MaClasse::getCounter();
