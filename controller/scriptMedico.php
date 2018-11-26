<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    };

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $id = $_POST['escolha'];

    $sql = "SELECT `nome`,`especializacao`,`CRM` from `medico` where cod_ps = $id";
    
    $resultado = mysqli_query($link,$sql);

    echo json_encode(array("result" => $resultado));
?>