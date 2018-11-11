<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $codigo = $_POST['cod'];
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $tipo = $_POST['tipo'];
    $tamFila = $_POST['tamFila'];
    $tempoMedio = $_POST['tempoMedio'];

    $sql = "INSERT INTO posto_saude VALUES ";
    $sql .= "('$codigo', '$nome', '$rua', '$bairro', '$cidade', '$estado', '$tipo', '$tamFila', '$tempoMedio')"; 
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

    echo "Posto cadastrado com sucesso!";
?>
</body>
</html>   