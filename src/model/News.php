<?php
namespace LBC\model;

use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Console\Input\StringInput;
/**
 * @Entity
 * @Table(name="t_news")
 *
 */
class News
{
    /**
     * @var integer
     * @Column(name="i_id",type="integer",nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $i_id;
    
    /**
     * 
     * @var string
     * @Column(name="vch_ident",type="string",nullable=true,length=100)
     */
    private $vch_ident;
    
    /**
     *
     * @var string
     * @Column(name="vch_title",type="string",nullable=true,length=255)
     */
    private $vch_title;
    
    /**
     *
     * @var string
     * @Column(name="vch_shortDesc",type="text",nullable=true)
     */
    private $vch_shortDesc;
    /**
     *
     * @var string
     * @Column(name="vch_desc",type="text",nullable=true)
     */
    private $vch_desc;
    /**
     *
     * @var string
     * @Column(name="vch_image",type="text",nullable=true)
     */
    private $vch_image;
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_date", type="date", nullable=true)
     */
    private $dt_date = 'CURRENT_TIMESTAMP';
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_created", type="date", nullable=true)
     */
    private $dt_created = 'CURRENT_TIMESTAMP';
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_modified", type="date", nullable=true)
     */
    private $dt_modified = 'CURRENT_TIMESTAMP';

    /**
     * @var \boolean
     *
     * @Column(name="published", type="integer", nullable=true)
     */
    private $published ;

    /**
     * @return bool
     */
    public function isPublished()
    {
        return $this->published;
    }

    /**
     * @param bool $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }


    
    /**
     * @return string
     */
    public function getVch_image()
    {
        return $this->vch_image;
    }

    /**
     * @param string $vch_image
     */
    public function setVch_image($vch_image)
    {
        $this->vch_image = "http://pdch.napsy.com".$vch_image;
    }

    /**
     * @return DateTime
     */
    public function getDt_date()
    {
        return $this->dt_date;
    }

    /**
     * @param DateTime $dt_date
     */
    public function setDt_date($dt_date)
    {
        $this->dt_date = $dt_date;
    }

    /**
     * @return DateTime
     */
    public function getDt_created()
    {
        return $this->dt_created;
    }

    /**
     * @return DateTime
     */
    public function getDt_modified()
    {
        return $this->dt_modified;
    }

    /**
     * @param DateTime $dt_created
     */
    public function setDt_created($dt_created)
    {
        $this->dt_created = $dt_created;
    }

    /**
     * @param DateTime $dt_modified
     */
    public function setDt_modified($dt_modified)
    {
        $this->dt_modified = $dt_modified;
    }

    /**
     * @return number
     */
    public function getI_id()
    {
        return $this->i_id;
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
    public function getVch_title()
    {
        return $this->vch_title;
    }

    /**
     * @return string
     */
    public function getVch_shortDesc()
    {
        return $this->vch_shortDesc;
    }

    /**
     * @return string
     */
    public function getVch_desc()
    {
        return $this->vch_desc;
    }

    /**
     * @param number $i_id
     */
    public function setI_id($i_id)
    {
        $this->i_id = $i_id;
    }

    /**
     * @param string $vch_ident
     */
    public function setVch_ident($vch_ident)
    {
        $this->vch_ident = $vch_ident;
    }

    /**
     * @param string $vch_title
     */
    public function setVch_title($vch_title)
    {
        $this->vch_title = $vch_title;
    }

    /**
     * @param string $vch_shortDesc
     */
    public function setVch_shortDesc($vch_shortDesc)
    {
        $this->vch_shortDesc = $vch_shortDesc;
    }

    /**
     * @param string $vch_desc
     */
    public function setVch_desc($vch_desc)
    {
        $this->vch_desc = $vch_desc;
    }

}

