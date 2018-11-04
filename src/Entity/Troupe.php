<?php

/**
 * @author yannloup
 *
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * The Troupe Entity represents a Troup, a Group, an Association, a Ligue of improvisation.
 * 
 * 
 * @example AIA, LICA, Les Fruits des Fondus... 
 * 
 * 
 * @ORM\Entity(repositoryClass="App\Repository\TroupeRepository")
 * 
 */
class Troupe extends ImprovGroup
{
    
}



class OLD {
    /**
     * @ORM\Id()
     * @ORM\Column(type="uuid_binary")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=20)   
     */
    private $shortName;    //@todo make unique and manage duplicate???
    
    public function  __construct(){
        $this->id = Uuid::uuid4();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

 

  

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }



    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }
}
