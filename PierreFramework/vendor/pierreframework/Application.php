<?php

namespace PierreFramework;

use Routers\Router;
use Routers\Route;

abstract class Application
{
    // Attributs
    protected HTTPRequest $httpRequest;
    protected HTTPResponse $httpResponse;
    protected string $name;
    protected User $user;

    // Constructeur
    public function __construct()
    {
        $this->httpRequest  = new HTTPRequest($this);
        $this->httpResponse = new HTTPResponse($this);
        $this->name         = '';
        $this->user         = new User;
    }

    // Getters et Setters
    public function getHttpRequest(): HTTPRequest
    {
        return $this->httpRequest;
    }

    public function getHttpResponse(): HTTPResponse
    {
        return $this->httpResponse;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getController()
    {
        // Déclarations de variable
        $xmlRouteFile = new \DOMDocument;
        $router       = new Routers\Router;

        // Instructions
        // $xmlRouteFile->load(__DIR__ . '/src/' . $this->name . '/config/routes.xml');
        $xmlRouteFile->load(__DIR__.'/../../src/apps/'.$this->name.'/config/routes.xml');
        $routes = $xmlRouteFile->getElementsByTagName('route');

        foreach ($routes as $route)
        {
            $route = new Route($route->getAttribute('url'), $route->getAttribute('module'), $route->getAttribute('action'), explode(', ', $route->getAttribute('vars')));
            $router->addRoutes($route);  
        }

        try
        {
            $router->getRoutes($this->httpRequest->getRequestURI());
        }
        catch (Exception $e)
        {
            $this->httpResponse->redirect404();
        }

        $_GET = array_merge($_GET, $matchedRoute->getVars());
        $controllerClass = 'App\\'.$this->name.'\\Modules\\'.$matchedRoute->getModule().'\\'.$matchedRoute->getModule().'Controller';
        return new $controllerClass($this, $matchedRoute->getModule(), $matchedRoute->getAction());
    }

    // Autres méthodes
    abstract public function run();
}
