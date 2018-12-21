<?php

class Model
{


        protected function connectBdd()
        {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=bdd_videatube;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $bdd;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }



}

?>