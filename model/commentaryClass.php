<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 18/12/2018
 * Time: 15:32
 */

class commentaryClass{
  var $id;
  var $content;
  var $id_video;
  var $id_user;
  var $date_comm;


    /**
     * commentaryClass constructor.
     * @param $id
     * @param $content
     * @param $id_video
     * @param $id_user
     * @param $date_comm
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getId_video()
    {
        return $this->id_video;
    }

    /**
     * @param mixed $id_video
     */
    public function setId_video($id_video)
    {
        $this->id_video = $id_video;
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
    public function getDate_comm()
    {
        return $this->date_comm;
    }

    /**
     * @param mixed $date_comm
     */
    public function setDate_comm($date_comm)
    {
        $this->date_comm = $date_comm;
    }
}

