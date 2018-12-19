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


    /**
     * commentaryClass constructor.
     * @param $id
     * @param $content
     * @param $id_video
     * @param $id_user
     */
    public function __construct($id, $content, $id_video, $id_user)
    {
        $this->id = $id;
        $this->content = $content;
        $this->id_video = $id_video;
        $this->id_user = $id_user;
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

