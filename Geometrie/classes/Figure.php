<?php

abstract class Figure // implements Deformable
{
    use TraitFigure;

    // Attributs
    protected $x;
    protected $y;

    // Construteur
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Getters + Setters
    public function getX()
    { 
 		return $this->x; 
	}

    public function setX($x)
    {  
		$this->x = $x; 
	}

    public function getY()
    { 
 		return $this->y; 
	}

    public function setY($y)
    {  
		$this->y = $y; 
    }
    
    // Autres
    public function displayProperties()
    {
        echo "Coordonnées x : " . $this->x;
        echo "Coordonnées y : " . $this->y;
    }

    public function deformation($coeffH, $coeffV)
    {
        $this->x = $coeffV;
        $this->y = $coeffH;
    }

    public function ninetyDegrees()
    {
        $this->setY(-90);
        $this->setX(-90);
    }
}