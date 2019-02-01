<?php

session_start();

if(isset($_SESSION['info']))
{
    unset($_SESSION['info']);
}
if(isset($_SESSION['alert']))
{
    unset($_SESSION['alert']);
}

?>