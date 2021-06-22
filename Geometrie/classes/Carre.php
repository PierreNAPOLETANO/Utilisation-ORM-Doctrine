<?php

class Carre extends Figure
{
    // Constructor
    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
    }

    // Autres méthodes
    public function deformation($coeffH, $coeffV)
    {
        $this->x = $coeffV;
        $this->y = $coeffH;
    }
}