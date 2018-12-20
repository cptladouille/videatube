<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 18/12/2018
 * Time: 15:30
 */

class videoClass
{

    var $id;
    var $title;
    var $price;
    var $link;
    var $date_upload;

    /**
     * videoClass constructor.
     * @param $id
     * @param $title
     * @param $duratio
     * @param $price
     * @param $link
     * @param $date_upload
     */
    public function __construct($id, $title, $price, $link, $date_upload)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->link = $link;
        $this->date_upload = $date_upload;
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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getDateUpload()
    {
        return $this->date_upload;
    }

    /**
     * @param mixed $date_upload
     */
    public function setDateUpload($date_upload)
    {
        $this->date_upload = $date_upload;
    }


}