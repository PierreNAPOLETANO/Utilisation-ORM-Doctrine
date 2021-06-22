<?php

class Managers
{
    // Attributs
    protected $api = null;
    protected $dao = null;
    protected array $managers = new array();

    // Constructeur
    public function __construct($api, $dao)
    {
        $this->api = $api;
        $this->dao = $dao;
    }

    // Gettes ans setters
    

    // Autres méthodes
    public function getManagerOf(string $module): Manager
    {
        if(!isset($this->managers[$module]))
        {
            $manager = '\\Model\\' . $module . 'Manager' . $this->api;
            $this->managers[$module] = new $manager($this->dao);
        }
        return $this->managers[$module];
    }
}
