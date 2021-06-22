<?php

class BackController extends Application
{
    // Attributs
    protected string $action = '';
    protected string $module = '';
    protected Page $page;
    protected string $view = '';
    protected Managers $managers = null;

    // Constructeur
    public function __construct(Application $app, string $module, string $action)
    {
        parent::__construct();
        $this->module   = $module;
        $this->action   = $action;
        $this->page     = new Page();
        $this->managers = new Managers('PDO', PDOFactory::getMysqlConnexion());
        $this->setView($action);
    }

    // Getters et Setters
    public function getPage(): Page
    {
        return $this->page;
    }

    public function setModule(string $module): void
    {
        $this->module = $module;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function setView(string $view): void
    {
        $this->view = $view;
        $this->page->setContentFile(__DIR__ . "src/apps/" . $this->app->getName() . "/modules/" . $this->module . "/views/" . $this->view .".php");
    }

    // Autres méthodes
    public function execute(): void
    {
        $method = "execute" . $this->action;
        $isCallable = is_callable($method, true, $callableMethod);
        
        if($isCallable)
            $this->$callableMethod($this->app->getHTTPRequest());
        else
            throw new RuntimeException("La méthode $this->action n'existe pas");
    }
}
