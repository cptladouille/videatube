<?php 
$root = str_replace('\\', '/', dirname(__DIR__));
require_once('model/videoManager.php');
require_once('model/userManager.php');
require_once('model/subscriptionManager.php');
require_once('model/typeSubManager.php');

function getHome(){
    $vM = new videoManager();
    $uM = new userManager();
    $data2 = $uM->getListOfNicknames();
    $data = $vM->getListOfLinks();
    require_once ('view/home.php');
    
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
    $tSM = new typeSubManager();
    $datas = $tSM->getList();
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
                    $sM = new subscriptionManager();
                    $_SESSION['userConnected'] = array(
                        'id'        =>  $user->getId(),
                        'lastname'  =>  $user->getLastname(),
                        'firstname' =>  $user->getFirstname(),
                        'mail'      =>  $user->getMail(),
                        'nickname'  =>  $user->getNickname(),
                        'role'      =>  $user->getLastname(),
                        'avatar'    =>  $user->getAvatar(),
                        'roleLabel' =>  attribRole($user->getLastname()),
                        'daysAbo'   =>  $sM->getDaysAbo($user->getId()));
                }
                else
                {
                    $_POST['alert'] ='Mauvaise combinaison mot de passe/Login';
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

function checkFormPassword()
{
    //vérifie que les deux champs de mot de passe sont bien rentrés et les comparent
    if((isset($_POST['password']) && str_replace(" ","",trim($_POST['password'] ," \t\n\r\0\x0B")) != "") && 
        (isset($_POST['password2']) && str_replace(" ","",trim($_POST['password2'] ," \t\n\r\0\x0B")) != ""))
    {
        if($_POST['password'] == $_POST['password2'])
        {
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            try
            {
                $uM = new userManager();
                $uM->updatePassword($_SESSION['userConnected']['id'],$password);
            }
            catch(Exception $e)
            {
                echo $e;
                $_POST['alert'] = 'Impossible de modifier le mot de passe';
                $_POST['editUserPassword'] = true;
            }
        }
        else{
            $_POST['alert'] = 'Les deux mots de passes ne correspondent pas';
            $_POST['editUserPassword'] = true;
        }
    }
    else
    {
        $_POST['alert'] = 'Veuillez remplir des deux champs correctement';
        $_POST['editUserPassword'] = true;
    }
        
}
function checkFormEdit()
{
    //condition de vérification pour les différents champs du formulaire d'édition du profil utiisateur
        if(isset($_POST['nom']) && str_replace(" ","",trim($_POST['nom'] ," \t\n\r\0\x0B")) != "")
        {
            $nom = $_POST['nom'];
        }
        else{$nom = $_SESSION['userConnected']['lastname'];}
        
        if(isset($_POST['prenom']) && str_replace(" ","",trim($_POST['prenom'] ," \t\n\r\0\x0B")) != "")
        {
            $prenom = $_POST['prenom'];
        }
        else{$prenom = $_SESSION['userConnected']['firstname'];}
        
        if(isset($_POST['mail']) && str_replace(" ","",trim($_POST['mail'] ," \t\n\r\0\x0B")) != "")
        {
            $mail  = $_POST['mail'];
        }
        else{$mail = $_SESSION['userConnected']['mail'];}
        
        if(isset($_POST['pseudo']) && str_replace(" ","",trim($_POST['pseudo'] ," \t\n\r\0\x0B")) != "")
        {
            $pseudo  = $_POST['pseudo'];
        }
        else{$pseudo = $_SESSION['userConnected']['nickname'];}
        
        if(isset($_POST['avatar']) && str_replace(" ","",trim($_POST['avatar'] ," \t\n\r\0\x0B")) != "")
        {
            $avatar  = $_POST['avatar'];
        }
        else{$avatar = $_SESSION['userConnected']['avatar'];}
        $dataUser = array(
            'lastname'  =>  $nom,
            'firstname' =>  $prenom,
            'mail'      =>  $mail,
            'nickname'  =>  $pseudo,
            'avatar'    =>  $avatar);
        try{
            if(checkDatasForm($dataUser) != null)
            {
                $dataUser = checkDatasForm($dataUser);
                $uM = new userManager();
                $uM->updateEdit($_SESSION['userConnected']['id'],$dataUser);
                $_SESSION['userConnected'] = $uM->updateSession($_SESSION['userConnected']);
            }
        }
        catch(Exception $e)
        {
            echo $e;
            $_POST['editUser'] = true;
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
                $_POST['alert'] = "L'email n'est pas conforme";
                $_POST['editUser'] = true;
                return null;
            }
        }
        $datas[$key] = $data;
    }
    return $datas;
}


function attribRole($role)
{
    //attribue le libellé de l'utilisateur en fonction de la valeur de son rôle
    if      ($role == 0){return 'Administrateur';}
    elseif  ($role == 1){return 'Utilisateur'   ;}
}

function disconnectUser()
{
    //détruit les variables de session et donc deconnecte l'utilisateur
    $_SESSION = array();
    session_destroy();
}

session_start();
?>