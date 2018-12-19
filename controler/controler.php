<?php session_start(); 


$root = str_replace('\\', '/', dirname(__DIR__));

require('model/model.php');

function getHome(){
    echo(getUser());
    require_once ('view/home.php');
    
}

function getVideo(){
    require_once ('view/video.php');
}
function getTheme(){
    require_once ('view/theme.php');
}

function getSubscription(){
    require_once ('view/subscription.php');
}

function getConnexion(){

    require_once ('view/connexion.php');
}
?>