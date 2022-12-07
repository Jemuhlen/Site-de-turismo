<?php
session_start();
if(!$_SESSION['usuario']){
    header('location: login1.php');
    exit();
}

?>