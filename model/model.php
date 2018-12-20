<?php
require_once ('model/videoClass')
require_once ('model/videoManager')
function connectBdd()
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

function getUser()
{
    $bdd = connectBdd ();
    $req = $bdd->prepare('SELECT firstname FROM user WHERE id = 3');
    $req->execute();
    return $data;
}

function getAllVideos()
{
    $bdd = connectBdd ();
    $req = $bdd->prepare('SELECT * FROM video ORDER BY price');
    $req->execute();
    $i = 0;
    $res = $req->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $row)
    {
        $data[$i] =  getObj;
        $i++;
    }

    return $data;
}

function lol()
{
    $vM = new videoManager(connectBdd);
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
?>