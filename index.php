<?php
    //session_start();
    

    require_once ('controler/controler.php');



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
            if(isset($_GET['theme']))
            if ($theme == 1)
            {
                getTheme('action');
            }
            getTheme("");
        }

    }
    else{
        getHome();

    }
?>