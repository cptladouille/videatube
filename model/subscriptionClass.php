<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 18/12/2018
 * Time: 15:30
 */

class subscriptionClass
{
    var $id;
    var $date_sub;
    var $id_user;
    var $id_type_subscription;


    /**
     * subscriptionClass constructor.
     * @param $id
     * @param $date_sub
     * @param $id_user
     * @param $id_type_subscription
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
    public function getDate_sub()
    {
        return $this->date_sub;
    }

    /**
     * @param mixed $date_sub
     */
    public function setDate_sub($date_sub)
    {
        $this->date_sub = $date_sub;
    }

    /**
     * @return mixed
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getId_type_subscription()
    {
        return $this->id_type_subscription;
    }

    /**
     * @param mixed $id_type_subscription
     */
    public function setId_type_subscription($id_type_subscription)
    {
        $this->id_type_subscription = $id_type_subscription;
    }


}