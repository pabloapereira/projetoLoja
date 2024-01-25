<?php 
    $hostName = "localhost";
    $banco = "projeto_loja";
    $usuario = "root";
    $senha = "";
    
    $mysqli = new mysqli($hostName, $usuario, $senha, $banco);
    if ($mysqli->connect_errno) {
        echo 'Falha ao conectar ('. $mysqli->connect_errno .')';
    }else {
        echo 'conectado';
    }
?>