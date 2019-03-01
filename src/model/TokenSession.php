<?php
namespace LBC\model;

use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Console\Input\StringInput;
/**
 * Token session
 *
 * @Entity
 * @Table(name="t_tokenSession")
 */
class TokenSession
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
     * @Column(name="vch_session",type="string",nullable=false)
     */
    private $vch_session;
    
    /**
     * @var string
     * @Column(name="vch_token",type="string",nullable=false)
     */
    private $vch_token;
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_created", type="datetime", nullable=true)
     */
    private $dt_created ;
    
    /**
     * @var \DateTime
     *
     * @Column(name="dt_expired", type="datetime", nullable=true)
     */
    private $dt_expired ;
    
    /**
     * @return string
     */
    public function getVch_session()
    {
        return $this->vch_session;
    }

    /**
     * @param string $vch_session
     */
    public function setVch_session($vch_session)
    {
        $this->vch_session = $vch_session;
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
    public function getVch_token()
    {
        return $this->vch_token;
    }

    /**
     * @return \DateTime
     */
    public function getDt_created()
    {
        return $this->dt_created;
    }

    /**
     * @return \DateTime
     */
    public function getDt_expired()
    {
        return $this->dt_expired;
    }

    /**
     * @param number $i_id
     */
    public function setI_id($i_id)
    {
        $this->i_id = $i_id;
    }

    /**
     * @param string $vch_token
     */
    public function setVch_token($vch_token)
    {
        $this->vch_token = $vch_token;
    }

    /**
     * @param \DateTime $dt_created
     */
    public function setDt_created($dt_created)
    {
        $this->dt_created = $dt_created;
    }

    /**
     * @param \DateTime $dt_expired
     */
    public function setDt_expired($dt_expired)
    {
        $this->dt_expired = $dt_expired;
    }

    public function isValid(){
        $expiredTokenDate = new \DateTime("now");
        return $expiredTokenDate < $this->dt_expired;
    }
}

