<?php

namespace PierreFramework;

class ApplicationComponent
{
    // Attributs
    protected Application $app;

    // Constructeur
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    // Getters et setters
    public function getApp(): Application
    {
        return $this->app;
    }

    // Autres méthodes
}
