<?php

namespace PierreFramework;

class Page extends ApplicationComponent
{
    // Attributs
    private string $contentFile;
    private array $vars = [];

    // Constructeur
    

    // Getters et Setters
    public function setContentFile(string $contentFile): void
    {
        $this->contentFile = $contentFile;
    }

    // Autres méthodes
    public function addVar(string $var, $value): void
    {
        if (is_string($var) && !empty($var))
        {
            $this->vars[] = $value;
        }
        else
        {
            throw new Exception("Erreur, la variable $var est nulle et ce n'est pas une chaine de caractères");
        }
    }

    public function getGeneratedPage(): string
    {
        extract($this->vars);
        ob_start();
        require __DIR__ . $this->contentFile;        
        $pageContent = ob_get_clean();

        ob_start();
        require __DIR__.'/../../src/apps/' . $this->app->getName() . '/templates/layout.php';
        return ob_get_clean();
    }
}
