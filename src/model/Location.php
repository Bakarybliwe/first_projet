<?php

namespace LBC\model;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * User
 *	
 * @Entity
 * @Table(name="t_locations")
 */
class Location
{
    /**
     * @var integer
     *
     * @Column(name="i_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $i_id;
    
    /**
     * @var string
     *
     * @Column(name="vch_name", type="string", length=255, nullable=true)
     */
    private $vch_name;
    
    /**
     * @var string
     *
     * @Column(name="vch_ref", type="string", length=255, nullable=true)
     */
    private $vch_ref;

    /**
     * @var ArrayCollection $apartment
     *
     * @ORMOneToMany(targetEntity="Apartment", mappedBy="Location", cascade={"persist", "remove", "merge"})
     */
    private $apartments;
    
    public function __construct() {
        $this->apartments = new ArrayCollection();
    }
    
    /**
     * @return integer
     */
    public function getI_id()
    {
        return $this->i_id;
    }

    /**
     * @return string
     */
    public function getVch_name()
    {
        return $this->vch_name;
    }

    /**
     * @return string
     */
    public function getVch_ref()
    {
        return $this->vch_ref;
    }

    
    /**
     * @return ArrayCollection $produit
     */
    public function getApartments() {
        return $this->apartments;
    }
    
    
    /**
     * @param integer $i_id
     */
    public function setI_id($i_id)
    {
        $this->i_id = $i_id;
    }

    /**
     * @param string $vch_name
     */
    public function setVch_name($vch_name)
    {
        $this->vch_name = $vch_name;
    }

    /**
     * @param string $vch_ref
     */
    public function setVch_ref($vch_ref)
    {
        $this->vch_ref = $vch_ref;
    }

}
