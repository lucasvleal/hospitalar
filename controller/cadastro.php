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