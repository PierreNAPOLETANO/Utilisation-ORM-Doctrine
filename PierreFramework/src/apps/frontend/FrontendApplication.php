<?php

namespace App\Frontend;

use PierreFramework\Application;
use PierreFramework\Controller\BackController;

class FrontendApplication extends Application
{
    // Attributs


    // Constructeur
    public function __construct()
    {
        parent::__construct();
        $this->app = 'Frontend Application';
    }

    // Getters et Setters


    // Autres méthodes
    public function run()
    {
        $controller = $this->getController();
        $ontroller->execute();
        $this->httpResponse->setPage($controller->getPage());
        return $this->httpResponse->send();
    }
}
