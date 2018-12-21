<?php

class Model 
{
    public function __construct()
    {
        
    }
    protected function connectBdd()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_videatube;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }

    function getVideosByTheme($theme)
    {
        $bdd = connectBdd();
        $data= '';
        switch ($theme)
        {
            case 0:
                $req = $bdd->prepare('SELECT * FROM video v INNER JOIN videotheme vt ON v.id = vt.id_video WHERE vt.id_theme = '.$theme.' ORDER BY v.price');
                $req->execute();
                $data = $req->fetch();
                break;
            case 1:
                $req = $bdd->prepare('SELECT * FROM video WHERE ');
                break;
            case 2:
                $req = $bdd->prepare('SELECT * FROM video WHERE ');
                break;
            case 3:
                $req = $bdd->prepare('SELECT * FROM video WHERE ');
                break;
            case 4:
                $req = $bdd->prepare('SELECT * FROM video WHERE ');
                break;
            case 5:
                $req = $bdd->prepare('SELECT * FROM video WHERE ');
                break;
            default:
                break;
        }
        return $data;
    }
}
?>