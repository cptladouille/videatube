<?php session_start(); 


$root = str_replace('\\', '/', dirname(__DIR__));

require('model/model.php');

function getHome(){
    require ('view/home.php');
}

function getVideo(){
    require ('view/videoClass.php');
}

function getSubscription(){
    require ('view/subscription.php');
}


function getConnexion(){

    require ('view/connexion.php');
}
