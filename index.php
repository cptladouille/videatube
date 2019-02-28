<?php
require_once ('controler/controler.php');
if (isset($_GET['p']))
{
    $p = $_GET['p'];
    if ($p == 'video')
    {
        getVideo();
    }
    elseif($p == 'unsub')
    {
        unsubUser();
        $p="profil";
        header('Location: ./profil');
        getProfil();
    }
    elseif($p == 'deleteAccount')
    {
        deleteAccount();
        $p='home';
        header('Location: ./home');
        getHome();
    }
    elseif ($p == 'subscription')
    {
        if(isset($_POST['subscription']))
        {
            getSubscription();
        }
        else
        {
            $p='home';
            header('Location: ./home');
            getHome();
        }
    }
    elseif ($p == 'refreshComms')
    {
        putCommentary();
        refreshCommentaries();
    }
    elseif ($p =='myVideos')
    {
        getMyVideos();
    }
    elseif($p == 'applyFilters')
    {
        refreshVideos();
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
            if(checkFormInscription())
            {
                $p='connexion';
                header('Location: ./connexion');
                getConnexion();
            }
        }
        getInscription();
    }
    elseif ($p == 'purchase')
    {
        if (isset($_POST['purchaseSubId']) || isset($_POST['purchaseVideoId']))
        {
            switch(purchaseItem())
            {
                case 1:
                    $p="video";
                    header('Location: ./video'.'-'.$_GET['vId']);
                    getVideo();
                    break;
                default:
                    $p="home";
                    header('Location: ./home');
                    getHome();
                    break;
            }
        }
        else
        {
            if(getPurchase() == false)
            {
                $p="home";
                header('Location: ./home');
                getHome();
            }
        }
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
    elseif ($p == 'search'){
        getSearch($_POST['search']);
    }
    elseif ($p == 'theme'){
        getTheme();
    }
    elseif ($p == 'condition')
    {
        getCondition();
    }
}
else{
    getHome();

}
?>