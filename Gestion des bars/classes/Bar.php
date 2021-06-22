<?php

class Bar
{
	// Attributs
	protected $id;
	protected $name;
	protected $address;
	protected $type;

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

	public function getName()
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddress(string $address)
	{
		$this->address = $address;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType(string $type)
	{
		$this->type = $type;
	}

	// Autres méthodes
	public function hydrate(array $data)
	{
		foreach ($data as $key => $value) {
			$method = 'set' . ucfirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}
}