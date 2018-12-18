Js<?php

function connectBdd()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_videatube;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

