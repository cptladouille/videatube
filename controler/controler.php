<?php 
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
function getVideo()
{
    $dataUserConnected;
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
        echo "Erreur form inscription un des champs n'est pas rempli";
    }
}

function connectUser()
{
    //récupère les informations du formulaire d'inscription et crée un nouvel user dans la base de données
    if (isset($_POST['login']) && $_POST['login']!="" && isset($_POST['mdp']) && $_POST['mdp'] != "" )
    {   
        if (isset($_SESSION['userConnected']))
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
                    $_SESSION['userConnected'] = array(
                        'id'        =>  $user->getId(),
                        'lastname'  =>  $user->getLastname(),
                        'firstname' =>  $user->getFirstname(),
                        'mail'      =>  $user->getMail(),
                        'nickname'  =>  $user->getNickname(),
                        'role'      =>  $user->getLastname(),
                        'avatar'    =>  $user->getAvatar(),
                        'roleLabel' =>  attribRole($user->getLastname()));
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

function checkFormEdit()
{
        if(isset($_POST['nom']) && str_replace(" ","",trim($_POST['nom'] ," \t\n\r\0\x0B")) != "")
        {
            $nom = $_POST['nom'];
        }
        else
        {
            $nom = $_SESSION['userConnected']['lastname'];
        }
        if(isset($_POST['prenom']) && str_replace(" ","",trim($_POST['prenom'] ," \t\n\r\0\x0B")) != "")
        {
            $prenom = $_POST['prenom'];
        }
        else
        {
            
            $prenom = $_SESSION['userConnected']['firstname'];
        }
        if(isset($_POST['mail']) && str_replace(" ","",trim($_POST['mail'] ," \t\n\r\0\x0B")) != "")
        {
            $mail  = $_POST['mail'];
        }
        else
        {
            $mail = $_SESSION['userConnected']['mail'];
        }
        if(isset($_POST['pseudo']) && str_replace(" ","",trim($_POST['pseudo'] ," \t\n\r\0\x0B")) != "")
        {
            $pseudo  = $_POST['pseudo'];
        }
        else
        {
            
            $pseudo = $_SESSION['userConnected']['nickname'];
        }
        if(isset($_POST['avatar']) && str_replace(" ","",trim($_POST['avatar'] ," \t\n\r\0\x0B")) != "")
        {
            $avatar  = $_POST['avatar'];
        }
        else
        {
            $avatar = $_SESSION['userConnected']['avatar'];
          
        }
        $dataUser = array(
            'lastname'  =>  $nom,
            'firstname' =>  $prenom,
            'mail'      =>  $mail,
            'nickname'  =>  $pseudo,
            'avatar'    =>  $avatar);
        $uM = new userManager();
        if(checkDatasForm($dataUser) != null)
        {
            $dataUser = checkDatasForm($dataUser);
            $uM->updateEdit($_SESSION['userConnected']['id'],$dataUser);
            $_SESSION['userConnected'] = $uM->updateSession($_SESSION['userConnected']);
        }
        else
        {
            $_POST['alert'] = 'Impossible de modifier les informations';
        }

}

function checkDatasForm($datas)
{
    //vérifie la conformitée du contenu des valeurs entrées par l'utilisateur   
    foreach ($datas as $key => $data)
    {
        $data = str_replace(" ","",trim($data ," \t\n\r\0\x0B"));
        if($key == 'mail')
        {
            if(!preg_match("#@#",$data))
            {
                return null;
            }
        }
        $datas[$key] = $data;
    }
    return $datas;
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

session_start();
?>