<?php

class CommandeManager
{
    private $dao;

    public function __construct($dao)
    {
        $this->setDao($dao);
    }    

    private function getDao()
    { 
 		return $this->dao; 
	} 

    private function setDao(PDO $dao)
    {
		$this->dao = $dao; 
    }
    
    public function add(Commande $commande)
    {
        $query = $this->dao->prepare('INSERT INTO commande (idBar, boisson, prix) VALUES (:idBar, :boisson, :prix)');
        $query->bindValue(':idBar', $commande->getIdBar());
        $query->bindValue(':boisson', $commande->getBoisson());
        $query->bindValue(':prix', $commande->getPrix());
        $query->execute();
    }

    public function get($id)
    {
        $query = $this->dao->prepare('SELECT boisson, prix FROM commande WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return new Bar($data);
    }

    public function update(Commande $commande)
    {
        $query = $this->dao->prepare('UPDATE commande SET boisson = :boisson, prix = :prix WHERE id = :id');
        $query->bindValue(':boisson', $commande->getBoisson());
        $query->bindValue(':prix', $commande->getPrix());
        $query->execute();
    }

    public function delete(Commande $commande)
    {
        $this->dao->exec('DELETE FROM commande WHERE id = ' . $commande->getId());
    }

    public function getAll()
    {
        $commandes = [];
        $query = $this->dao->prepare('SELECT boisson, prix FROM commande ORDER BY name');
        $query->execute();
        while($data = $query->fetch(PDO::FETCH_ASSOC))
        {
            $commandes[] = new Commande($data);
        }
        return $commandes;
    }
}