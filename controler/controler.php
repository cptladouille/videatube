<?php 
session_start();
$root = str_replace('\\', '/', dirname(__DIR__));

require_once('model/videoManager.php');
require_once('model/userManager.php');
function getHome(){
    $vM = new videoManager();
    $uM = new userManager();
    $data2 = $uM->getListOfNicknames();
    $data = $vM->getListOfLinks();
    require_once ('view/home.php');
    
}


function checkFormInscription()
{
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['login']) && isset($_POST['motDePasse']) && isset($_POST['pseudo']))
    {   
        $psswrd = password_hash($_POST['motDePasse'],PASSWORD_DEFAULT);
        $dataUser = array(
            'lastname'  =>  $_POST['nom'],
            'firstname' =>  $_POST['prenom'],
            'mail'      =>  $_POST['mail'],
            'log'       =>  $_POST['login'],
            'password'  =>  $psswrd,
            'nickname'  =>  $_POST['pseudo'],
            'role'      =>  0);
        $u = new userClass($dataUser);
        $uM = new userManager();
        $uM->add($u);
    }
    else
    {
        echo '<script>console.log("Error from check")</script>';
    }
}

function connectUser()
{
    if (isset($_POST['login']) && $_POST['login']!="" && isset($_POST['mdp']) && $_POST['mdp'] != "" )
    {   
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo']))
        {
            $_POST['alert'] = "Vous êtes déja connecté";
        }
        else
        {
            $uM = new userManager();    
            $user = $uM->getUserByLog($_POST['login']);
            if (!is_null($user))
            {
                if(password_verify($_POST['mdp'],$user->getPassword()))
                {

                    $_SESSION['id'] = $user-> getId();
                    $_SESSION['pseudo'] = $user->getNickname();
                    $_SESSION['mail'] = $user->getMail();
                    $_SESSION['prenom'] = $user->getFirstname();
                    $_SESSION['nom'] = $user->getLastname();
                    $_SESSION['role'] = $user->getRole();
                    $_SESSION['nomRole'] = attribRole($user->getRole());
                    $_SESSION['avatar'] = $user->getAvatar();
                }
                else
                {
                    $_POST['alert'] ='Mauvaise combinaison mot de passe / Login';
                }
            }
            else
            {
                $_POST['alert'] = "Aucun utilisateur n'existe avec ce login";
            }
        }
    }
    else
    {
        $_POST['alert'] ='Veuillez entrez un login et un mot de passe correct';
    }
}

function attribRole($role)
{
    if($role == 0)
    {
        return 'Administrateur';
    }
    elseif($role == 1)
    {
        return 'Utilisateur';
    }
}

function disconnectUser()
{
    $_SESSION = array();
    session_destroy();
}


function getVideo()
{
    require_once ('view/video.php');
}

function getTheme($theme)
{
    switch ($theme)
    {
        case 0:
            $datas = getAllVideo();
            break;
        case 1:
            $datas = getVideosByTheme('action');
            break;
        case 2:
            $datas = getVideosByTheme('aventure');
            break;
        case 3:
            $datas = getVideosByTheme('cuisine');
            break;
        case 4:
            $datas = getVideosByTheme('beaute');
            break;
        case 5:
            $datas = getVideosByTheme('animaux');
            break;
        case 6:
            $datas = getVideosByTheme('tuto');
            break;
        default:
            break;
    }
    $title = 'Thèmes';
    require_once ('view/theme.php');
}

function getSubscription(){
    require_once ('view/subscription.php');
}

function getConnexion(){

    require_once ('view/connexion.php');
}

function getInscription(){
    require_once ('view/inscription.php');
}

function getProfil(){


    require_once ('view/profil.php');
}


?>