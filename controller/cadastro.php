<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nasc'];
    $sexo = $_POST['sexo'];

    $sql = "INSERT INTO usuario VALUES ";
    $sql .= "('$nome', '$cpf', '$nasc', '$sexo', '$email', '$senha')"; 
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

    echo "Cliente cadastrado com sucesso!";
?>
</body>
</html>
    <!--/*
    $query_select = "'SELECT login,senha FROM usuarios WHERE login = '$email'";
    $select = mysql_query($query_select,$connect);
    $array = mysql_fetch_array($select);
    $logarray = $array['login'];
    $senharray = $array['senha'];
    
    if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
    
        }else{
        if($logarray == $login){
    
            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
            die();
    
        }else{
            $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
            $insert = mysql_query($query,$connect);
            
            if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
            }
        }
        }*/-->


?>