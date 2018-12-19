<?php
    //session_start();
    

    require_once ('controler/controler.php');
    require_once ('view/template.php');


    if (isset($_GET['p']))
    {
        $p = $_GET['p']; 
        if ($p == 'video')
        {
            getVideo();
        }
        elseif ($p == 'subscription')
        {
            getSubscription();
        }
        elseif ($p == 'connexion')
        {
            getConnexion();
        }
        elseif ($p == 'theme')
        {
            getTheme();
        }

    }
    else{
        getHome();

    }
?>