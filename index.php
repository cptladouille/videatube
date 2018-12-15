<?php

require_once ('controller/controller.php');

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