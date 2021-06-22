<?php

class Personnage
{
    private $force;
    private $experience = 0;

    public function __construct($force, $experience)
    {
        $this->force = $force;
        $this->$experience = $experience;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function setForce($force)
    {
        $this->force = $force;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function gainXp()
    {
        $this->experience += 1;
        if($this->experience >= 5)
        {
	    $this->experience = 0;
            $this->force += 1;
	}
    }
}
