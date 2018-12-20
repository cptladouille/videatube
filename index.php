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
        elseif ($p == 'inscription')
        {
            getInscription();
        }
        elseif ($p == 'theme')
        {
            if(isset($_GET['theme']))
                if ($theme == 1)
                {
                    getTheme(1);
                }
                elseif ($theme == 2)
                {
                    getTheme(2);
                }
                elseif ($theme == 3)
                {
                    getTheme(3);
                }
                elseif ($theme == 4)
                {
                    getTheme(4);
                }
                elseif ($theme == 5)
                {
                    getTheme(5);
                }
                elseif ($theme == 6)
                {
                    getTheme(6);
                }
            else
            {
                getTheme(0);
            }
        }
    }
    else{
        getHome();

    }
?>