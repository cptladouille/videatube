<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 18/12/2018
 * Time: 15:33
 */

class purchaseClass
{
    var $id;
    var $date_purchase;
    var $id_video;
    var $id_user;


    /**
     * purchaseClass constructor.
     * @param $id
     * @param $date_purchase
     * @param $id_video
     * @param $id_user
     */
    public function __construct($datas)
    {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDatePurchase()
    {
        return $this->date_purchase;
    }

    /**
     * @param mixed $date_purchase
     */
    public function setDatePurchase($date_purchase)
    {
        $this->date_purchase = $date_purchase;
    }

    /**
     * @return mixed
     */
    public function getIdVideo()
    {
        return $this->id_video;
    }

    /**
     * @param mixed $id_video
     */
    public function setIdVideo($id_video)
    {
        $this->id_video = $id_video;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }




}