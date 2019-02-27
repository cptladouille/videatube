<?php
$root = str_replace('\\', '/', dirname(__DIR__));
require_once('model/videoManager.php');
require_once('model/userManager.php');
require_once('model/subscriptionManager.php');
require_once('model/typeSubManager.php');
require_once('model/themeManager.php');
require_once('model/purchaseManager.php');
require_once('model/commentaryManager.php');

function getHome()
{
    $vM = new videoManager();
    $data = $vM->getList();
    require_once('view/home.php');

}

function getVideo()
{
    try {
        if (isset ($_GET['vId'])) {
            $vM = new videoManager();
            $v = $vM->get($_GET['vId']);
            $cArray[] = $vM->getCommentary($v);
            /*
            boucle pour changer le format des dates ne foncitionne pas -> dates inchengées une fois la variable passée dans la page
            foreach($cArray as $commArray)
            {
                for($i = 1; $i< count($commArray);$i++)
                {
                    $date = new DateTime($commArray[$i]['date_comm']);
                    $commArray[$i]['date_comm'] = $date->format('d/m/Y H:i:s');
                }
            }*/

            if ($v->getPrice() == 0) {
                $_POST['watch'] = true;
                $vM->updateNbViews($v);
            } else {
                if (isset($_SESSION['userConnected'])) {
                    if ($_SESSION['userConnected']['isSubscribed'] == true) {
                        $_POST['watch'] = true;
                        $vM->updateNbViews($v);
                    } elseif (checkUserVid($_SESSION['userConnected']['id'], $_GET['vId'])) {
                        $_POST['watch'] = true;
                        $vM->updateNbViews($v);
                    } else {
                        $_POST['purchase'] = true;
                    }
                } else {
                    $_POST['purchase'] = true;
                }
            }
        }
    } catch (Exception $e) {
        $_SESSION['alert'] = $e;
    }

    require_once('view/video.php');
}

function putCommentary()
{
    if (isset($_POST['content']) && isset($_POST['idVideo']) && isset($_SESSION['userConnected']['id'])) {
        if ($_POST['content'] != "") {
            try {
                $dataComm = array(
                    'content' => $_POST['content'],
                    'id_video' => $_POST['idVideo'],
                    'id_user' => $_SESSION['userConnected']['id'],
                    'date_comm' => date('Y-m-d H:i:s')
                );
                $c = new commentaryClass($dataComm);
                $cM = new commentaryManager();
                $cM->add($c);

            } catch (Exception $e) {

                $_POST['alert'] = $e;
            }
        }
    }
}

function getMyVideos()
{

    if (isset($_SESSION['userConnected'])) {
        if ($_SESSION['userConnected']['isSubscribed'] == false) {
            $vM = new videoManager();
            $data = $vM->getPurchasedVideos($_SESSION['userConnected']['id']);
        }
        require_once('view/myVideos.php');
    }
}

function refreshCommentaries()
{
    if (isset($_POST['idVideo'])) {
        $vM = new videoManager();
        $v = $vM->get($_POST['idVideo']);
        $cArray[] = $vM->getCommentary($v);
        require_once('view/commentaries.php');
    }
}

function refreshVideos()
{
    $idTheme = "";
    $keyWords = "";
    $price = "";
    if (isset($_POST['theme'])) {
        $idTheme = $_POST['theme'];
    }
    if (isset($_POST['keywords'])) {
        $keyWords = $_POST['keywords'];
    }
    if (isset($_POST['price'])) {
        $idPrice = $_POST['price'];
    }
    $vM = new videoManager();
    $videosFound = [];
    $videosFound = $vM->searchVideoByFilters($keyWords, $idTheme, $idPrice);
    if (count($videosFound) < 1) {
        $freeVideos = array();
        $freeVideos = $vM->getFreeVideos();
    }
    $_POST['search'] = $keyWords;
    require_once('view/contentSearch.php');
}

function getPurchase()
{
    if (isset($_POST['signUp'])) {
        $tSM = new typeSubManager();
        if (isset($_POST['signUpId'])) {
            $data = $tSM->get($_POST['signUpId']);
            require_once('view/purchase.php');
            return true;
        } else {
            $_SESSION['alert'] = "Aucun abonnement selectionné";
            return false;
        }
    } elseif (isset($_POST['purchase'])) {
        $vM = new videoManager();

        if (isset($_POST['purchaseVid'])) {
            $data = $vM->get($_POST['purchaseVid']);
            require_once('view/purchase.php');
            return true;
        } else {
            $_SESSION['alert'] = "Aucune vidéo selectionnée";
            return false;
        }
    }
}

function purchaseItem()
{
    try {

        if (isset($_SESSION['userConnected']['id']) && checkPayement()) {
            if (isset($_POST['purchaseSubId'])) {
                $sM = new subscriptionManager();
                $dataSub = array(
                    'date_sub' => date('Y-m-d H:i:s'),
                    'id_user' => $_SESSION['userConnected']['id'],
                    'id_type_subscription' => $_POST['purchaseSubId']
                );
                $s = new subscriptionClass($dataSub);
                $sM->add($s);
                updateSession($_SESSION['userConnected']);
                $_SESSION['info'] = "L'achat de l'abonnement a été effectué avec succès!";
                return 2;
            } elseif (isset($_POST['purchaseVideoId'])) {
                $pM = new purchaseManager();
                $dataPurchase = array(
                    'date_purchase' => date('Y-m-d'),
                    'id_video' => $_POST['purchaseVideoId'],
                    'id_user' => $_SESSION['userConnected']['id']
                );
                $p = new purchaseClass($dataPurchase);
                $pM->add($p);
                $_GET['vId'] = $_POST['purchaseVideoId'];
                $_SESSION['info'] = "L'achat de la vidéo a été effectué avec succès!";
                return 1;
            } else {
                $_SESSION['alert'] = "L'achat a échoué";
                return 0;
            }
        }
    } catch (Exception $e) {
        $_SESSION['alert'] = $e;
    }

}

//a remplir -> vérifie le remplissage des champs de la CB
function checkPayement()
{

    return true;
}

function getSearch()
{
    $tM = new themeManager();
    $dataThemes = $tM->getList();

    if (isset($_POST['search'])) {
        $vM = new videoManager();
        $videosFound = array();
        $videosFound = $vM->searchVideo($_POST['search']);
        if (count($videosFound) < 1) {
            $freeVideos = array();
            $freeVideos = $vM->getFreeVideos();
        }
    }
    require_once('view/search.php');
}


/*
function searchQuery($videos)
{
    if(isset($_POST['search']))
    {
        $videosFound = array();
        foreach($videosFound as $vData)
        {
            foreach($vData as $v)
            {
                echo "titre:".strtolower($v->getTitle)."   chaine:".strtolower($str);
                if(strpos(strtolower($v->getTitle),strtolower($str)) != false)
                {
                    array_push($videosFound,$v);
                }
            }
        }
        return $videosFound;
    }
    else
    {
        return null;
    }
}*/

function getTheme()
{
    if (isset($_GET['t'])) {
        $vM = new videoManager();
        $tM = new themeManager();
        if ($_GET['t'] == 0) {
            $data = $vM->getList();
        } else {
            $data = $vM->getVideoByTheme($_GET['t']);
            $t = $tM->get($_GET['t']);
        }
    }
    $title = 'Thèmes';
    require_once('view/theme.php');
}

function getSubscription()
{
    $tSM = new typeSubManager();
    $datas = $tSM->getList();
    require_once('view/subscription.php');
}

function getConnexion()
{
    require_once('view/connexion.php');
}

function getInscription()
{
    require_once('view/inscription.php');
}

function getProfil()
{
    updateSession($_SESSION['userConnected']);
    $isInTrial = isInTrial($_SESSION['userConnected']['id']);
    require_once('view/profil.php');
}

function getCondition()
{
    require_once('view/condition.php');
}

function unsubUser()
{
    try {
        if (isset($_SESSION['userConnected'])) {
            $uM = new userManager();
            $sM = new subscriptionManager();
            $user = $uM->get($_SESSION['userConnected']['id']);
            $s = $sM->getFromUser($user->getId());
            $sM->delete($s);
            $_SESSION['info'] = "Vous avez mis fin a la période d'essai de votre abonnement";
        }
    } catch (Exception $e) {
        $_SESSION['alert'] = $e;
    }
}

function updateSession($session)
{
    $_SESSION['userConnected'] = array();
    $uM = new userManager();
    $sM = new subscriptionManager();
    $user = $uM->get($session['id']);
    $datas = array(
        'id' => $user->getId(),
        'lastname' => $user->getLastname(),
        'firstname' => $user->getFirstname(),
        'mail' => $user->getMail(),
        'nickname' => $user->getNickname(),
        'role' => $user->getLastname(),
        'avatar' => $user->getAvatar(),
        'roleLabel' => attribRole($user->getLastname()),
        'aboDate' => $sM->getAboDate($user->getId()),
        'isSubscribed' => $sM->isSubscribed($user->getId()));
    $_SESSION['userConnected'] = $datas;
}

function checkFormInscription()
{
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['login']) && isset($_POST['motDePasse']) && isset($_POST['pseudo'])) {
        if (preg_match("/[a-zA-Z0-9]/", $_POST['nom']) && preg_match("/[a-zA-Z0-9]/", $_POST['prenom'])  && preg_match("/[a-zA-Z0-9]/", $_POST['login'])) {

            try {
                $psswrd = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);
                $dataUser = array(
                    'lastname' => $_POST['nom'],
                    'firstname' => $_POST['prenom'],
                    'mail' => $_POST['mail'],
                    'log' => $_POST['login'],
                    'password' => $psswrd,
                    'nickname' => $_POST['pseudo'],
                    'role' => 0);
                $u = new userClass($dataUser);
                $uM = new userManager();
                $uM->add($u);
            } catch (Exception $e) {
                $_SESSION['alert'] = $e;
            }
        } else {
            $_SESSION['alert'] = "Erreur form inscription un des champs n'est pas rempli";
        }
    }
}

function checkUserVid($idUser, $idVid)
{
    $pM = new purchaseManager();
    if ($pM->getByUserVideo($idUser, $idVid)) {
        return true;
    } else {
        return false;
    }
}

function connectUser()
{
    //récupère les informations du formulaire d'inscription et crée un nouvel user dans la base de données
    if (isset($_POST['login']) && $_POST['login'] != "" && isset($_POST['mdp']) && $_POST['mdp'] != "") {
        if (preg_match("/[a-zA-Z0-9]/", $_POST['login'])) {

            if (isset($_SESSION['userConnected'])) {
                $_SESSION['alert'] = "Vous êtes déja connecté";
                return false;
            } else {
                $uM = new userManager();
                $user = $uM->getUserByLog($_POST['login']);
                if (!is_null($user)) {
                    if (password_verify($_POST['mdp'], $user->getPassword())) {
                        $sM = new subscriptionManager();
                        $_SESSION['userConnected'] = array(
                            'id' => $user->getId(),
                            'lastname' => $user->getLastname(),
                            'firstname' => $user->getFirstname(),
                            'mail' => $user->getMail(),
                            'nickname' => $user->getNickname(),
                            'role' => $user->getLastname(),
                            'avatar' => $user->getAvatar(),
                            'roleLabel' => attribRole($user->getLastname()),
                            'aboDate' => $sM->getAboDate($user->getId()),
                            'isSubscribed' => $sM->isSubscribed($user->getId()));
                        $_SESSION['info'] = "Bienvenue, " . $_SESSION['userConnected']['nickname'] . "!";
                        return true;
                    } else {
                        $_SESSION['alert'] = 'Mauvaise combinaison mot de passe/Login';
                        return false;
                    }
                } else {
                    $_SESSION['alert'] = "Aucun utilisateur n'existe avec ce login";
                    return false;
                }
            }
        } else {
            $_SESSION['alert'] = 'Veuillez entrez un login et un mot de passe correct';
            return false;
        }
    }
}

function isInTrial($id)
{
    $uM = new userManager();
    $sM = new subscriptionManager();
    $user = $uM->get($_SESSION['userConnected']['id']);
    $dateEndTrial = new DateTime($sM->getDateTrial($user->getId())['dateTrial']);
    $dD = (new DateTime())->format('Y-m-d H:i:s');
    if ($dateEndTrial->format('Y-m-d H:i:s') > $dD) {
        return true;
    } else {
        return false;
    }
}

function deleteAccount()
{
    try {
        if (isset($_SESSION['userConnected'])) {
            $uM = new userManager();
            $u = $uM->get($_SESSION['userConnected']['id']);
            $uM->delete($u);
            disconnectUser();
            $_SESSION['info'] = "Votre compte a été supprimé";
        }
    } catch (Exception $e) {
        $_SESSION['alert'] = $e;
    }
}

function checkFormPassword()
{
    //vérifie que les deux champs de mot de passe sont bien rentrés et les comparent
    if ((isset($_POST['password']) && str_replace(" ", "", trim($_POST['password'], " \t\n\r\0\x0B")) != "") &&
        (isset($_POST['password2']) && str_replace(" ", "", trim($_POST['password2'], " \t\n\r\0\x0B")) != "")) {
        if ($_POST['password'] == $_POST['password2']) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            try {
                $uM = new userManager();
                $uM->updatePassword($_SESSION['userConnected']['id'], $password);
            } catch (Exception $e) {
                echo $e;
                $_SESSION['alert'] = 'Impossible de modifier le mot de passe';
                $_POST['editUserPassword'] = true;
            }
        } else {
            $_SESSION['alert'] = 'Les deux mots de passes ne correspondent pas';
            $_POST['editUserPassword'] = true;
        }
    } else {
        $_SESSION['alert'] = 'Veuillez remplir des deux champs correctement';
        $_POST['editUserPassword'] = true;
    }

}

function checkFormEdit()
{
    //condition de vérification pour les différents champs du formulaire d'édition du profil utiisateur
    if (isset($_POST['nom']) && str_replace(" ", "", trim($_POST['nom'], " \t\n\r\0\x0B")) != "") {
        $nom = $_POST['nom'];
    } else {
        $nom = $_SESSION['userConnected']['lastname'];
    }

    if (isset($_POST['prenom']) && str_replace(" ", "", trim($_POST['prenom'], " \t\n\r\0\x0B")) != "") {
        $prenom = $_POST['prenom'];
    } else {
        $prenom = $_SESSION['userConnected']['firstname'];
    }

    if (isset($_POST['mail']) && str_replace(" ", "", trim($_POST['mail'], " \t\n\r\0\x0B")) != "") {
        $mail = $_POST['mail'];
    } else {
        $mail = $_SESSION['userConnected']['mail'];
    }

    if (isset($_POST['pseudo']) && str_replace(" ", "", trim($_POST['pseudo'], " \t\n\r\0\x0B")) != "") {
        $pseudo = $_POST['pseudo'];
    } else {
        $pseudo = $_SESSION['userConnected']['nickname'];
    }

    if (isset($_POST['avatar']) && str_replace(" ", "", trim($_POST['avatar'], " \t\n\r\0\x0B")) != "") {
        $avatar = $_POST['avatar'];
    } else {
        $avatar = $_SESSION['userConnected']['avatar'];
    }
    $dataUser = array(
        'lastname' => $nom,
        'firstname' => $prenom,
        'mail' => $mail,
        'nickname' => $pseudo,
        'avatar' => $avatar);
    try {
        if (checkDatasForm($dataUser) != null) {
            $dataUser = checkDatasForm($dataUser);
            $uM = new userManager();
            $uM->updateEdit($_SESSION['userConnected']['id'], $dataUser);
            updateSession($_SESSION['userConnected']);
        }
    } catch (Exception $e) {
        echo $e;
        $_POST['editUser'] = true;
        $_SESSION['alert'] = 'Impossible de modifier les informations';
    }
}

function checkDatasForm($datas)
{
    //vérifie la conformitée du contenu des valeurs entrées par l'utilisateur
    foreach ($datas as $key => $data) {
        $data = str_replace(" ", "", trim($data, " \t\n\r\0\x0B"));
        if ($key == 'mail') {
            if (!preg_match("#@#", $data)) {
                $_SESSION['alert'] = "L'email n'est pas conforme";
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
    if ($role == 0) {
        return 'Administrateur';
    } elseif ($role == 1) {
        return 'Utilisateur';
    }
}

function disconnectUser()
{
    try {
        //détruit les variables de session et donc deconnecte l'utilisateur
        $_SESSION['info'] = "A bientôt, " . $_SESSION['userConnected']['nickname'] . "!";
        $_SESSION = array();
        session_destroy();
    } catch (Excepction $e) {
        $_SESSION['alert'] = $e;
    }

}

session_start();
?>
