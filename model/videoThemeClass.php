<?php
/**
 * Created by PhpStorm.
 * User: chloethonin
 * Date: 19/12/2018
 * Time: 09:36
 */

class videoThemeClass
{
    var $id;
    var $id_video;
    var $id_theme;

    /**
     * videoThemeClass constructor.
     * @param $id
     * @param $id_video
     * @param $id_theme
     */
    public function __construct($id, $id_video, $id_theme)
    {
        $this->id = $id;
        $this->id_video = $id_video;
        $this->id_theme = $id_theme;
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
    public function getIdTheme()
    {
        return $this->id_theme;
    }

    /**
     * @param mixed $id_theme
     */
    public function setIdTheme($id_theme)
    {
        $this->id_theme = $id_theme;
    }


}