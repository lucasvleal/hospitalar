<html>
<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $cod = $_SESSION['codPS'];
    $rua = $_POST['rua'];
    $nome = $_POST['nome'];
    $bairro = $_POST['bairro'];
    $tipo = $_POST['tipo'];
    $tamFila = $_POST['tamFila'];
    $tempoMedio = $_POST['tempoMedio'];


   $query = "call updatePS('$nome', '$rua','$bairro','$tipo','$tamFila','$tempoMedio','$cod')";
        mysqli_query($link,$query) or die("Erro ao tentar atualizar registro");
        mysqli_close($link);

        echo "PS atualizado com sucesso!";
    

    
?>
    <a href = 'refresh.php'><br> Voltar </a>
</body>
</html>