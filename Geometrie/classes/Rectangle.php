<?php

class Rectangle extends Figure
{
    // Properties
    protected $height;
    protected $width;

    // Construtor
    public function __construct($height, $width, $centreX, $centreY)
    {
        $this->height = $height;
        $this->width  = $width;
        $this->x      = $centreX + $height / 2;
        $this->y      = $centreY + $width / 2;
    }

    // Getters + Setters
    public function getHeight()
    { 
 		return $this->height; 
	} 

    public function setHeight($height)
    {  
		$this->height = $height; 
	} 

    public function getWidth()
    { 
 		return $this->width; 
	} 

    public function setWidth($width)
    {  
		$this->width = $width; 
    }
    
    // Autres méthodes
    public function displayProperties()
    {
        echo "\n";
        echo "Coordonnées x : " . $this->x . "\n";
        echo "Coordonnées y : " . $this->y . "\n";
    }

    public function deformation($coeffH, $coeffV)
    {
        $this->x = $coeffV;
        $this->y = $coeffH;
    }
}