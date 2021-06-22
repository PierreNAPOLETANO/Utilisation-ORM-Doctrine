<?php

namespace PierreFramework\Routers;

class Router
{
    // Atributs
    private array $routes = [];

    // Constructeur


    // Getters et setters


    // Autres méthodes
    public function addRoutes(Route $route): void
    {
        if (!in_array($route, $this->routes))
            $this->routes[] = $route;
    }

    public function getRoutes(string $url)
    {
        foreach ($this->routes as $route)
        {
            if ($route->match($url))
            {
                if($route->hasVars())
                {
                    $variablesRoute = $route->match($url);
                    $variables = array();
                    foreach ($variablesRoute as $key => $value) // Ici il faut parser les variables récupérées
                    {
                        if ($key >= 1)
                        {
                            $variables[$route->getVarsNames()[$key - 1]] = $value;
                            $route->setVars($variablesRoute);
                        }
                    }
                }
                return $route;
            } else {
                throw new Exception("Erreur, il n'y a pas de route correspondant à l'URL.");
            }
        }
    }
}
