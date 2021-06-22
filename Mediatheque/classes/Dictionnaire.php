<?php

class Dictionnaire extends Media
{
    protected $language;
    protected $numberOfTome;

    public function __construct(string $title, string $language, int $numberOfTome)
    {
        parent::__construct($title);
        $this->language       = $language;
        $this->numberOfTome = $numberOfTome;
    }

    public function __get($attribut)
    {
        echo "L'attribut " . $attribut . " n'existe pas ou n'est pas accessible";
    }

    public function __set($attribut, $value)
    {
        echo "On a tenté d'assigner à l'attribut " . $attribut . " la valeur " . $value . PHP_EOL;
    }

    public function __isset($attribut)
    {
        echo "L'attribut " . $attribut . " n'existe pas ou n'est pas accessible";
        return false;
    }

    public function __unset($attribut)
    {
    }

    public function __toString()
    {
        return parent::__toString() . " - " . $this->langue . " - " . $this->id;
    }

    // Getters et setters
    public function getLanguage()
    {
        return $this->language;
    }
    
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getNumberOfTome()
    {
        return $this->numberOfTome;
    }
    
    public function setNumberOfTome($numberOfTome)
    {
        $this->numberOfTome = $numberOfTome;
    }
}