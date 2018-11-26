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

    $email = "'$email'";
    $senha = "'$senha'";
    $nome = "'$nome'";
    $cpf = "'$cpf'";
    $sexo = "'$sexo'";

    $array = explode('/',$nasc);

    $data = "$array[2]"."-"."$array[1]"."-"."$array[0]";
    $data = "'$data'";

    $sql = "call cadastrar($nome, $cpf, $data, $sexo, $email, $senha)";
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

    echo "Cliente cadastrado com sucesso!";
?>
<a href="../view/acesso.php"><br>Voltar</a>
</body>
</html>