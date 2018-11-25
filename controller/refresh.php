<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$cod = $_SESSION['codPS'];
$link = mysqli_connect("localhost", "root", "", "hospitalar_web");
$sql = "SELECT * FROM `posto_saude` WHERE cod_ps = $cod;";
$result = mysqli_query($link, $sql);
$dados = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['nomehosp'] = $dados['nome'];
$_SESSION['rua'] = $dados['rua'];
$_SESSION['bairro'] = $dados['bairro'];
$_SESSION['tipo_ps'] = $dados['tipo_ps'];
$_SESSION['fila_ps'] = $dados['fila_ps'];
$_SESSION['tempo_med_atend'] = $dados['tempo_med_atend'];

header("Location: ../view/pagAdmin.php");
?>