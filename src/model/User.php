<?php

namespace LBC\model;


use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Console\Input\StringInput;
/**
 * User
 *	
 * @Entity
 * @Table(name="t_users")
 */
class User
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
     * @Column(name="vch_uid", type="string", length=255, nullable=true)
     */
    private $vch_uid;

    /**
     * @var integer
     *
     * @Column(name="i_userType", type="integer", nullable=true)
     */
    private $i_userType;
    
    /**
     * @var string
     *
     * @Column(name="vch_firstName", type="string", length=255, nullable=true)
     */
    private $vch_firstName;
    
    /**
     * @var string
     *
     * @Column(name="vch_lastName", type="string", length=255, nullable=true)
     */
    private $vch_lastName;
    

    /**
     * @var string
     *
     * @Column(name="vch_email", type="string", length=255, nullable=true)
     */
    private $vch_email;
    
    /**
     * @var string
     *
     * @Column(name="vch_phone", type="string", length=255, nullable=true)
     */
    private $vch_phone;
    
    /**
     * @var string
     *
     * @Column(name="vch_mobile", type="string", length=255, nullable=true)
     */
    private $vch_mobile;
    
    /**
     * @var string
     *
     * @Column(name="vch_address", type="string", length=255, nullable=true)
     */
    private $vch_address;
    /**
     * @var string
     *
     * @Column(name="vch_street", type="string", length=255, nullable=true)
     */
    private $vch_street;
    
    /**
     * @var string
     *
     * @Column(name="vch_city", type="string", length=255, nullable=true)
     */
    private $vch_city;
    
    /**
     * @var string
     *
     * @Column(name="vch_pc", type="string", length=255, nullable=true)
     */
    private $vch_pc;
    
    /**
     * @var string
     *
     * @Column(name="vch_appartNumber", type="string", length=255, nullable=true)
     */
    private $vch_appartNumber;
    
    /**
     * @var integer
     * @Column(name="i_nbKey",type="integer",nullable=true)
     */
    private $i_nbKey;
    
    /**
     * @var string
     * @Column(name="vch_floor",type="string",length=255,nullable=true)
     */
    private $vch_floor;
    
    /**
     * @var string 
     * @Column(name="vch_opt",type="string",length=255,nullable=true)
     */
    private $vch_opt;
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_created", type="date", nullable=true)
     */
    private $dt_created ;
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_lastconnection", type="date", nullable=true)
     */
    private $dt_lastconnection ;
    /**
     * @return number
     */
    public function getI_nbKey()
    {
        return $this->i_nbKey;
    }

    /**
     * @return string
     */
    public function getVch_floor()
    {
        return $this->vch_floor;
    }

    /**
     * @return string
     */
    public function getVch_opt()
    {
        return $this->vch_opt;
    }

    /**
     * @param number $i_nbKey
     */
    public function setI_nbKey($i_nbKey)
    {
        $this->i_nbKey = $i_nbKey;
    }

    /**
     * @param string $vch_floor
     */
    public function setVch_floor($vch_floor)
    {
        $this->vch_floor = $vch_floor;
    }

    /**
     * @param string $vch_opt
     */
    public function setVch_opt($vch_opt)
    {
        $this->vch_opt = $vch_opt;
    }

    /**
     * @return integer
     */
    public function getI_userType()
    {
        return $this->i_userType;
    }

    /**
     * @param integer $i_userType
     */
    public function setI_userType($i_userType)
    {
        $this->i_userType = $i_userType;
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
    public function getVch_uid()
    {
        return $this->vch_uid;
    }

    /**
     * @return string
     */
    public function getVch_firstName()
    {
        return $this->vch_firstName;
    }

    /**
     * @return string
     */
    public function getVch_lastName()
    {
        return $this->vch_lastName;
    }

    /**
     * @return string
     */
    public function getVch_email()
    {
        return $this->vch_email;
    }

    /**
     * @return string
     */
    public function getVch_phone()
    {
        return $this->vch_phone;
    }

    /**
     * @return string
     */
    public function getVch_mobile()
    {
        return $this->vch_mobile;
    }

    /**
     * @return string
     */
    public function getVch_address()
    {
        return $this->vch_address;
    }

    /**
     * @return string
     */
    public function getVch_street()
    {
        return $this->vch_street;
    }

    /**
     * @return string
     */
    public function getVch_city()
    {
        return $this->vch_city;
    }

    /**
     * @return string
     */
    public function getVch_pc()
    {
        return $this->vch_pc;
    }

    /**
     * @return string
     */
    public function getVch_appartNumber()
    {
        return $this->vch_appartNumber;
    }

    /**
     * @return string
     */
    public function getDt_created()
    {
        return $this->dt_created;
    }

    /**
     * @return string
     */
    public function getDt_lastconnection()
    {
        return $this->dt_lastconnection;
    }

    /**
     * @param integer $i_id
     */
    public function setI_id($i_id)
    {
        $this->i_id = $i_id;
    }

    /**
     * @param string $vch_uid
     */
    public function setVch_uid($vch_uid)
    {
        $this->vch_uid = $vch_uid;
    }

    /**
     * @param string $vch_firstName
     */
    public function setVch_firstName($vch_firstName)
    {
        $this->vch_firstName = $vch_firstName;
    }

    /**
     * @param string $vch_lastName
     */
    public function setVch_lastName($vch_lastName)
    {
        $this->vch_lastName = $vch_lastName;
    }

    /**
     * @param string $vch_email
     */
    public function setVch_email($vch_email)
    {
        $this->vch_email = $vch_email;
    }

    /**
     * @param string $vch_phone
     */
    public function setVch_phone($vch_phone)
    {
        $this->vch_phone = $vch_phone;
    }

    /**
     * @param string $vch_mobile
     */
    public function setVch_mobile($vch_mobile)
    {
        $this->vch_mobile = $vch_mobile;
    }

    /**
     * @param string $vch_address
     */
    public function setVch_address($vch_address)
    {
        $this->vch_address = $vch_address;
    }

    /**
     * @param string $vch_street
     */
    public function setVch_street($vch_street)
    {
        $this->vch_street = $vch_street;
    }

    /**
     * @param string $vch_city
     */
    public function setVch_city($vch_city)
    {
        $this->vch_city = $vch_city;
    }

    /**
     * @param string $vch_pc
     */
    public function setVch_pc($vch_pc)
    {
        $this->vch_pc = $vch_pc;
    }

    /**
     * @param string $vch_appartNumber
     */
    public function setVch_appartNumber($vch_appartNumber)
    {
        $this->vch_appartNumber = $vch_appartNumber;
    }

    /**
     * @param string $dt_created
     */
    public function setDt_created($dt_created)
    {
        $this->dt_created = $dt_created;
    }

    /**
     * @param string $dt_lastconnection
     */
    public function setDt_lastconnection($dt_lastconnection)
    {
        $this->dt_lastconnection = $dt_lastconnection;
    }
    

    
    
  
}
