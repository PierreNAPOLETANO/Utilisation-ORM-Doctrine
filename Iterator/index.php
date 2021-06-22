<?php

class myIterator implements SeekableIterator {
    private $position = 0;
    private $array = array(
        "premierelement",
        "secondelement",
        "dernierelement",
    );

    /**
     * Remet la position du curseur à 0.
     */
    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    /**
     * Retourne l'élément courant du tableau.
     */
    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    /**
     * Retourne la clé actuelle
     */
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    /**
     * Déplace le curseur vers l'élément suivant.
     */
    public function next() {
        var_dump(__METHOD__);
        return $this->position++;
    }

    /**
     * Permet de tester si la position actuelle est valide.
     */
    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    /**
     * Déplace le curseur interne
     */
    public function seek($position)
    {
        $old = $this->position;
        $this->position = $position;

        if (!$this->valid()) {
            $this->position = $old;
            throw new OutOfBoundsException("position invalise ($position)");
        }
    }

    /**
     * Assigne une valeur à une entrée.
     */
    public function offsetSet($offset, $value)
    {
        if(is_null($offset))
        {
            $this->array[] = $value;
        }
        else
        {
            $this->array[$offset] = $value;
        }
    }

    /**
     * Vérifie si la clé existe.
     */
    public function offsetExists($offset)
    {
        return isset($this->array[$offset]);
    }

    /**
     * Supprime une entrée et émettra une erreur si elle n'existe pas, comme pour les tableaux.
     */
    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }

    /**
     * Retourne la valeur de la clé demandée ou null si elle n'existe pas
     */
    public function offsetGet($offset)
    {
        return isset($this->array[$offset]) ? $this->array[$offset] : null;
    }

    
    public function count()
    {
        return count($this->array);
    }
}

$it = new myIterator;
foreach ($it as $key => $value){
    var_dump($key, $value);
    echo PHP_EOL;
}

try {
} catch (\Throwable $th) {
}