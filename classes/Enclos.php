<?php 

class Enclos 
{
    private string $type;
    private int $capacite;
    private array $animaux;

    public function __construct(string $type, int $capacite)
    {
        $this->type = $type;
        $this->capacite = $capacite;
        $this->animaux = [];
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getCapacite()
    {
        return $this->capacite;
    }

    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function addAnimaux(Animal $animal)
    {
        $this->animaux[] = $animal;
    }
}


?>