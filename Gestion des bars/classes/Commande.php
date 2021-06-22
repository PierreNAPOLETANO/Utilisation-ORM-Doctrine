<?php

class Commande
{
    // Attributs
    protected $id;
    protected $idBar;
    protected $boisson;
    protected $prix;

    // Construteurs
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // Getters et Setters
    public function getId()
    { 
      	return $this->id; 
    } 

    public function setId(int $id)
    {  
		$this->id = $id; 
    }

    public function getIdBar() { 
      return $this->idBar; 
   } 
 
   public function setIdBar($idBar) {  
     $this->idBar = $idBar; 
   }

    public function getBoisson()
    { 
      	return $this->boisson; 
    } 

    public function setBoisson(string $boisson)
    {  
      	$this->boisson = $boisson; 
    } 

    public function getPrix()
    { 
      	return $this->prix; 
    } 

    public function setPrix(int $prix)
    {  
		$this->prix = $prix; 
    }
    
    // Autres méthodes
    public function hydrate(array $data)
    {
      foreach ($data as $key => $value) {
        $method = 'set' . ucfirst($key);
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
      }
    } 
}