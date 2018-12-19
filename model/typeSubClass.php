<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 18/12/2018
 * Time: 15:30
 */

class typeSubClass
{
    var $id;
    var $price;
    var $duration;
    var $nbDayTrial;
    var $title;

    /**
     * typeSubClass constructor.
     * @param $id
     * @param $price
     * @param $duration
     * @param $nbDayTrial
     * @param $title
     */
    public function __construct($id, $price, $duration, $nbDayTrial, $title)
    {
        $this->id = $id;
        $this->price = $price;
        $this->duration = $duration;
        $this->nbDayTrial = $nbDayTrial;
        $this->title = $title;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getNbDayTrial()
    {
        return $this->nbDayTrial;
    }

    /**
     * @param mixed $nbDayTrial
     */
    public function setNbDayTrial($nbDayTrial)
    {
        $this->nbDayTrial = $nbDayTrial;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}