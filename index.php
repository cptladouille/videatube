<?php

require_once ('controler/controler.php');

require_once ('view/template.php');

if (isset($_GET['p'])){
    $p = $_GET['p']; 
    if ($p == 'video'){
        getVideo();
    }
    elseif ($p == 'subscription'){
        getSubscription();
    }
}
else{
    getHome();

}
?>