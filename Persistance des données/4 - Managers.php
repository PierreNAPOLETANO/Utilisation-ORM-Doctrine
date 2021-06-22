<?php

// Structure de base de notre manager
class BarManager
{
    private $dao;

    public function __construct($dao)
    {
        $this->setDao($dao);
    }

    private function setDao(PDO $dao)
    {
        $this->dao = $dao;
    }

    public function add(Bar $bar)
    {
        $q = $this->dao->prepare('INSERT INTO bars(nom, adresse) VALUES(:nom, :adresse)');
        $q->bindValue(':nom', $bar->getNom());
        $q->bindValue(':adresse', $bar->getAdresse());
        $q->execute();
    }

    public function get($id)
    {
        $q = $this->dao->prepare('SELECT nom, adresse FROM bars WHERE id = :id');
        $q->bindValue(':id', $id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);

        return new Bar($data);
    }

    public function update(Bar $bar)
    {
        $q = $this->dao->prepare('UPDATE bars SET nom = :nom, adresse = :adresse WHERE id = :id');
        $q->bindValue('id', $bar->getId());
        $q->bindValue('nom', $bar->getNom());
        $q->bindValue('adresse', $bar->getAdresse());
        $q->execute();
    }

    public function delete(Bar $bar)
    {
        $this->dao->exec('DELETE FROM bars WHERE id = ' . $bar->getId());
    }
    
    public function getAll()
    {
        $bars = [];
        $q = $this->dao->prepare('SELECT nom, adresse FROM bars ORDER BY nom');
        $q->execute();

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $bars[] = new Bar($data);
        }

        return $bars;
    }
}
