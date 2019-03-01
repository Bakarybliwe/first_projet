<?php

namespace LBC\model;


use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Console\Input\StringInput;
/**
 * User
 *	
 * @Entity
 * @Table(name="t_admin")
 */
class Login
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @Column(name="pseudo", type="string", length=255, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @Column(name="mdp", type="string", nullable=false)
     */
    private $mdp;
    
    

    /**
     * Get the value of pseudo
     *
     * @return  string
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @param  string  $pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of mdp
     *
     * @return  string
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @param  string  $mdp
     *
     * @return  self
     */ 
    public function setMdp(string $mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
