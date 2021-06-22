<?php

class Triangle extends Figure
{
    // Properties
    protected $height;

    // Constructor
    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
    }

    // Getters + Setters
    public function getHigh()
    {
 		return $this->high; 
	} 

    public function setHigh($high) 
    {
		$this->high = $high; 
    }
    
    // Autres méthodes
    public function deformation($coeffH, $coeffV)
    {
        $this->x = $coeffV;
        $this->y = $coeffH;
    }
}