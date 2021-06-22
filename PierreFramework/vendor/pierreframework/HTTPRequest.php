<?php

namespace PierreFramework;

class HTTPRequest extends ApplicationComponent
{
    // Attributs


    // Construteur
    

    // Getters et Setters


    // Autres méthodes
    
    /**
     * Retourne la valeur correspondante � l'�l�ment recherché
     * s'il existe ou bien null
     */
    public function getCookie(string $key): string
    {
        return $this->cookieExists($key) ? $_GET[$key] : null;
    }

    /**
     * Retourne si l'élément existe sous la forme d'un booléen
     */
    public function cookieExists(string $key): bool
    {
        return isset($_COOKIE[$key]) ? true : false;
    }

    /**
     * Retourne la valeur correspondante à l'élément recherché
     * s'il existe ou bien null
     */
    public function getQuery(string $key): string
    {
        return $this->queryExists($key) ? $_GET[$key] : null;
    }

    /**
     * Retourne si l'élément existe sous la forme d'un booléen
     */
    public function queryExists(string $key): bool
    {
        return (isset($_REQUEST[$key])) ? true : false;
    }

    /**
     * Retourne la valeur correspondante à l'élément recherché
     * s'il existe ou bien null
     */
    public function getPosts(string $key): string
    {
        return $this->postExists($key) ? $_GET[$key] : null;
    }

    /**
     * Retourne si l'�l�ment existe sous la forme d'un booléen
     */
    public function postExists(string $key): bool
    {
        return (isset($_POST[$key])) ? true : false;
    }

    /**
     * Retourne l'URI de la requête 
     */
    public function getRequestURI(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * Retourne la méthode utilisé pour envoyer un requêtes
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
