<?php
session_start();
if(!$_SESSION['usuario']){
    header('location: index.php');
    exit();
}

?>