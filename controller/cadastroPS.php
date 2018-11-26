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
    $particular = $_POST['particular'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];

    $req = "$rua - $bairro - $cidade - $estado";

    $sql = "INSERT INTO posto_saude VALUES ";
    $sql .= "('$codigo', '$nome', '$rua', '$bairro', '$cidade', '$estado', '$tipo', '$tamFila', '$tempoMedio','$particular')"; 
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro hospital");
    $sql = "INSERT INTO markers VALUES ('$codigo', '$nome', '$req', '$lat', '$long','$tipo');";
    mysqli_query($link, $sql) or die ("Erro ao tentar cadastrar registro marcador");
    mysqli_close($link);
    header("Location: ../view/pagSuperAdmin.php");
?>
</body>
<a href = '../view/pagSuperAdmin.php'>Voltar</a>

</html>   