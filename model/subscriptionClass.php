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
    public function __construct($id, $date_sub, $id_user, $id_type_subscription)
    {
        $this->id = $id;
        $this->date_sub = $date_sub;
        $this->id_user = $id_user;
        $this->id_type_subscription = $id_type_subscription;
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
    public function getDateSub()
    {
        return $this->date_sub;
    }

    /**
     * @param mixed $date_sub
     */
    public function setDateSub($date_sub)
    {
        $this->date_sub = $date_sub;
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

    /**
     * @return mixed
     */
    public function getIdTypeSubscription()
    {
        return $this->id_type_subscription;
    }

    /**
     * @param mixed $id_type_subscription
     */
    public function setIdTypeSubscription($id_type_subscription)
    {
        $this->id_type_subscription = $id_type_subscription;
    }


}