<?php 

class Soigneur 
{
    private string $nom;
    private DateTime $age;
    private string $specialite;
    private array $animaux;

    public function __construct(string $nom, string $age, string $specialite)
    {
        $this->nom = $nom;
        $this->age = new DateTime($age);
        $this->specialite = $specialite;
        $this->animaux = [];
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge()
    {
        return $this->age->format("Y");
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function addAnimaux(Animal $animal)
    {
        $this->animaux[] = $animal;
    }
}


?>