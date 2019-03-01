<?php

namespace LBC\model;


/**
 * Equipment
 *	
 * @Entity
 * @Table(name="t_equipment")
 */
class Equipment
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
     * @Column(name="vch_ident", type="string", length=100,nullable=true)
     */
    private $vch_ident;
    
    /**
     * @var integer
     * 
     * @Column(name="i_order", type="integer", length=100,nullable=true)
     */
    private $i_order;
    

    

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
     * @var string
     *
     * @Column(name="vch_unity", type="string", length=100, nullable=true)
     */
    private $vch_unity;
    
    
    /**
     * @var string
     *
     * @Column(name="vch_streamId", type="string", length=100, nullable=true)
     */
    private $vch_streamId;
   
    /**
     * @return string
     */
    public function getVch_streamId()
    {
        return $this->vch_streamId;
    }

    /**
     * @param string $vch_streamId
     */
    public function setVch_streamId($vch_streamId)
    {
        $this->vch_streamId = $vch_streamId;
    }

    /**
     * @return string
     */
    public function getVch_unity()
    {
        return $this->vch_unity;
    }

    /**
     * @param string $vch_unity
     */
    public function setVch_unity($vch_unity)
    {
        $this->vch_unity = $vch_unity;
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
     * @return integer
     */
    public function getI_order()
    {
    	return $this->i_order;
    }
    
    /**
     * @return string
     */
    public function getVch_ident()
    {
    	return $this->vch_ident;
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
     * @param integer $i_order
     */
    public function setI_order($i_order)
    {
    	$this->i_order = $i_order;
    }
    
    /**
     * @param string $vch_ident
     */
    public function setVch_ident($vch_ident)
    {
    	$this->vch_ident = $vch_ident;
    }
    
    /**
     * @param string $vch_ref
     */
    public function setVch_ref($vch_ref)
    {
        $this->vch_ref = $vch_ref;
    }

}
