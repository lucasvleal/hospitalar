<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $CRM = $_POST['CRM'];
    $espec = $_POST['espec'];
    $codPS = $_POST['codPS'];

    $sql = "INSERT INTO medico VALUES ";
    $sql .= "('$nome', '$CRM', '$espec', '$codPS', '$email', '$senha')"; 
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

    echo "Médico cadastrado com sucesso!!";
?>
</body>
</html>