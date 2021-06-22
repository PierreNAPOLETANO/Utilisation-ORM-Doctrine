<?php

namespace PierreFramework;

class HTTPResponse extends ApplicationComponent
{
    // Attributs
    private $page;

    // Construteur
    
   
    // Getters et Setters
    public function setPage(Page $page): void
    {
        $this->page = $page;
    }


    // Autres méthodes

    /**
     * Il s’agit simplement d’ajouter un header à notre page
     */
    public function addHeader(string $header): void
    {
        header($header);
    }

    /**
     * La fonction redirect doit rediriger notre visiteur sur une autre page.
     */
    public function redirect(string $location): void
    {
        header('Location: '. $location);
    }

    /**
     * Laissez-là vide pour l'instant, nous nous chargerons de son implémentation par la suite
     */
    public function redirect404()
    {
        $this->page = new Page($this->app);
        $this->page->setContentFile(__DIR__ . '/../../errors/404.html');
        $this->addHeader("HTTP/1.0 404 Not Found");
        return $this->send();
    }

    /**
     * Elle doit retourner la méthode « getGeneratedPage() » de notre page. 
     * Comme ce sera la fonction utilisée pour répondre à l’utilisateur, 
     * et qu’elle « terminera » le script, il faut utiliser la fonction « exit » de PHP
     */
    public function send(): void
    {
        exit($this->page->getGeneratedPage());
    }

    /**
     * Elle est à true, alors qu'elle est à false sur la fonction setcookie()de la bibliothèque standard de PHP. 
     * Il s'agit d'une sécurité pour que notre cookie ne soitpasutilisable en javascript par exemple.
     */
    public function setCookie(string $name, string $value = '', int $expire = 0, string $path = '', string $domain = '', bool $secure = false, bool $httponly = true): void
    {
        $httponly = false;
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }
}
