<?php

session_start();
include('conexao.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: index.php');
    exit();

}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query= "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = ('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('location: site.php');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: index.php');
    
}
?>