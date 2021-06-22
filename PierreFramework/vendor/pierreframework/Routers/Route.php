<?php

namespace PierreFramework\Routers;

class Route
{
    // Attributs
    private string $url;
    private string $module;
    private string $action;
    private array $varNames;
    private array $vars = array();

    // Contructeurs
    public function __construct(string $url, string $module, string $action, array $varNames)
    {
        $this->url      = $url;
        $this->module   = $module;
        $this->action   = $action;
        $this->varNames = $varNames;
    }

    // Getters et Setters
    public function getURL()
    {
        return $this->url;
    }

    public function setURL(string $url)
    {
        $this->url = $url;
    }

    public function getModule()
    {
        return $this->module;
    }

    public function setModule(string $module)
    {
        $this->module = $module;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction(string $action)
    {
        $this->action = $action;
    }
    
    public function getVarsNames()
    {
        return $this->varNames;
    }

    public function setVarsNames(array $varsNames)
    {
        $this->varNames = $varsNames;
    }

    public function getVars()
    {
        return $this->vars;
    }

    public function setVars(array $vars)
    {
        $this->vars = $vars;
    }


    //  Autres méthodes
    public function hasVars(): bool
    {
        return (count($this->varsNames) >= 1) ? true : false;
    }

    public function match($url): bool
    {
        return (preg_match('#^'.$this->url.'$#', $url, $matches)) ? $matches : false;
    }
}
