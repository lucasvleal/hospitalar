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

    $email = "'$email'";
    $senha = "'$senha'";
    $nome = "'$nome'";
    $CRM = "'$CRM'";
    $espec = "'$espec'";
    $codPS = "'$codPS'";

    $sql = "call cadastrarMedico($nome, $CRM, $espec, $codPS, $email, $senha)";

    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

?>
<script>history.go(-1);</script>
</body>
</html>