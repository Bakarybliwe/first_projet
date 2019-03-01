<?php

namespace LBC\model;


/**
 * Apartment
 *	
 * @Entity
 * @Table(name="t_apartment")
 */
class Apartment
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
     * @var string
     *
     * @Column(name="vch_numBail", type="string", length=255, nullable=true)
     */
    private $vch_numBail;

    /**
     * @ManyToOne(targetEntity="Location", inversedBy="Apartment", cascade={"persist", "merge"})
     * @JoinColumn(name="id_location", referencedColumnName="i_id")
     * @var Location $location
     */
    private $location = null;
    
    /**
     * @var integer
     *
     * @Column(name="id_location", type="integer", nullable=false)
     */
    private $idLocation;
   
    /**
     * @return string
     */
    public function getVch_numBail()
    {
        return $this->vch_numBail;
    }

    /**
     * @param string $vch_numBail
     */
    public function setVch_numBail($vch_numBail)
    {
        $this->vch_numBail = $vch_numBail;
    }

    /**
     * @return \LBC\model\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return number
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * @param number $idLocation
     */
    public function setIdLocation($idLocation)
    {
        $this->idLocation = $idLocation;
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
