<?php
session_start();
include ('conecta.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$login = "SELECT * FROM usuario WHERE ds_login= '$login' && ds_senha ='$senha'";
$res = $PDO->query($login);

if($res ->rowCount() == 0){
    echo 0;
}else{
    foreach ($res as $row){
        $_SESSION['login']=$row['ds_login'];
        $_SESSION['senha']=$row['ds_senha'];
    }
    echo 1;
}
?>