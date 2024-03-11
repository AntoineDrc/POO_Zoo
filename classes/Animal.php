<?php 

class Animal 
{
    private string $espece;
    private DateTime $age;
    private string $sante;
    private Enclos $enclos;
    private Soigneur $soigneur;

    public function __construct(string $espece, string $age, string $sante, Enclos $enclos, Soigneur $soigneur)
    {
        $this->espece = $espece;
        $this->age = New DateTime($age);
        $this->sante = $sante;
        $this->enclos = $enclos;
        $this->soigneur = $soigneur;
        $this->enclos->addAnimaux($this);
        $this->soigneur->addAnimaux($this);
    }

     public function getEspece()
    {
        return $this->espece;
    }

    public function setEspece($espece)
    {
        $this->espece = $espece;

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

    public function getSante()
    {
        return $this->sante;
    }

    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

    public function getEnclos()
    {
        return $this->enclos;
    }

    public function setEnclos($enclos)
    {
        $this->enclos = $enclos;

        return $this;
    }

    public function getSoigneur()
    {
        return $this->soigneur;
    }

    public function setSoigneur($soigneur)
    {
        $this->soigneur = $soigneur;

        return $this;
    }

    public function __toString()
    {
        return $this->espece . " " . $this->getAge() . " " . $this->sante;
    }
}


?>