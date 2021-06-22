<?php

class BarManager
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
    
    public function add(Bar $bar)
    {
        $query = $this->dao->prepare('INSERT INTO bar(name, address, type) VALUES (:name, :address, :type)');
        $query->bindValue(':name', $bar->getName());
        $query->bindValue(':address', $bar->getAddress());
        $query->bindValue(':type', $bar->getType());
        $query->execute();
    }

    public function get($id)
    {
        $query = $this->dao->prepare('SELECT name, address, type FROM bar WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return new Bar($data);
    }

    public function update(Bar $bar)
    {
        $query = $this->dao->prepare('UPDATE bar SET name = :name, address = :address, type = :type WHERE id = :id');
        $query->bindValue(':name', $bar->getName());
        $query->bindValue(':address', $bar->getAddress());
        $query->bindValue(':type', $bar->getType());
        $query->execute();
    }

    // public function delete(Bar $bar)
    // {
    //     $this->dao->exec('DELETE FROM bar WHERE id = ' . $bar->getId());
    // }
    public function delete(Bar $bar)
    {
        $q = $this->dao->prepare('DELETE FROM bar WHERE id = :id');
        $q->bindValue(':id', $bar->getId());
        $q->execute();
    }

    public function getAll()
    {
        $bars = [];
        $query = $this->dao->prepare('SELECT * FROM bar ORDER BY name');
        $query->execute();
        while($data = $query->fetch(PDO::FETCH_ASSOC))
        {
            $bars[] = new Bar($data);
        }
        return $bars;
    }
}