<?php
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
            if(isset($_POST['signUp']))
            {
                
            }
            getSubscription();
        }
        elseif ($p == 'connexion')
        {
            if (isset($_POST['formConnexion']))
            {
                if(connectUser())
                {
                    $p='home';
                    header('Location: ./home');
                    getHome();
                }
                else
                {
                    getConnexion();
                }
            } 
            elseif (isset($_POST['deconnexion']))
            {
                disconnectUser();
                getConnexion();
            }
            else{
                getConnexion();
            }
        }
        elseif ($p == 'inscription')
        {
            if (isset($_POST['formInscription']) )
            {
                checkFormInscription();
            }   
            getInscription();
        }
        elseif ($p == 'profil')
        {
            if (isset($_POST['validateEditUser']))
            {
                checkFormEdit();
            }
            elseif (isset($_POST['validateEditPasswordUser']))
            {
                checkFormPassword();
            }
            getProfil();
        }
        elseif ($p == 'theme'){
            getTheme();
        }
    }
    else{
        getHome();

    }
?>