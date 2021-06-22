<?php

abstract class Media
{
    // Attributs
    protected string $title;
    protected int $id;
    protected static int $registrationNumber = 1;

    // Contructeur + méthodes magique
    public function __construct(string $title, int $registrationNumber) {
        $this->title = $title;
        $this->id    = self::$registrationNumber;
        self::$registrationNumber++;
    }

    public function __get($attribut)
    {
        // echo "L'attribut " . $attribut . " n'existe pas ou n'est pas accessible";
        $this->listOfMedia[$attribut];
    }

    public function __set($attribut, $value)
    {
        // echo "On a tenté d'assigner à l'attribut " . $attribut . " la valeur " . $value . PHP_EOL;
        $this->listOfMedia[$attribut] = $value;
    }

    public function __isset($attribut)
    {
        echo "L'attribut " . $attribut . " n'existe pas ou n'est pas accessible";
        return false;
    }

    public function __unset($attribut)
    {
    }

    public function __call($method, $arguments)
    {
        echo "La méthode " . $method . " n'existe pas ou n'est pas accessible. Les arguments étaient " . implode($arguments);
    }

    // public function __callStatic($method, $arguments)
    // {
    //     echo "La méthode " . $method . " n'existe pas ou n'est pas accessible. Les arguments étaient " . implode($arguments);
    // }

    public function __toString()
    {
        return $this->registrationNumber . " - " . $this->title . "\n";
    }

    // Getters et Setters
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getListOfMedia()
    {
        return $this->listOfMedia;
    }

    public function setListOfMedia($listOfMedia)
    {
        $this->listOfMedia = $listOfMedia;
    }

    // Autre méthodes
    
}