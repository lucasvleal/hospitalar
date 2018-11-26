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
    $codPS = $_POST['codPS'];    

    $email = "'$email'";
    $senha = "'$senha'";
    $codPS = "'$codPS'";

    $sql = "call cadastrarAdmin($email, $senha, $codPS)";
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);
    header("Location: ../view/pagSuperAdmin.php");
?>
</body>
</html>