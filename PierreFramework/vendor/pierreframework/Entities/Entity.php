<?php

class Entity implements ArrayAccess
{
    // Attributs
    protected int $id = null;
    protected array $errors = new array();

    // Constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // Getters et Setters
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function setID(int $id): void
    {
        $this->id = $id;
    }
    

    // Autres méthodes
    public function hydrate(array $data): void
    {
        foreach($data as $key => $value)
        {
            $method = 'set' . ucfirst($key);
            if (method_exist($this, $method))
            {
                $this->method($value);
            }
        }
    }

    public function isNew(): bool
    {
        if(!empty($this->id))
        {
            return true;
        }
        return false;
    }

    public function offsetExists ($offset): bool
    {
        return isset($this[$offset]);
    }

    public function offsetGet ($offset)
    {
        $method = 'get' . ucfirst($offset);
        if (method_exists($this, $method))
        {
            return $this->$method();
        }
    }

    public function offsetSet ($offset, $value): void
    {
        $method = 'set' . ucfirst($offset);
        if (method_exists($this, $method))
        {
            return $this->$method();
        }
    }

    public function offsetUnset ($offset): void
    {
        unset($offset);
    }
}
