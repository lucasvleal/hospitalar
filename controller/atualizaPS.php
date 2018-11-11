<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $cod = $_POST['codPS'];
    $rua = $_POST['rua'];
    $nome = $_POST['nome'];
    $bairro = $_POST['bairro'];
    $tipo = $_POST['tipo'];
    $tamFila = $_POST['tamFila'];
    $tempoMedio = $_POST['tempoMedio'];

    //-----AUTENTICAR----
    /*$sql = "SELECT cod_ps FROM posto_saude WHERE cod_ps ='$cod'";
    
    $autenticar = mysqli_query($link,$sql);
    $total = mysqli_num_rows($autenticar);
    echo $total;
    if($total == 0){
        die('Não existe tal Posto de Saúde'. mysql_error());
    } else{*/
        //-----ATUALIZAÇÃO----
        $sql = "UPDATE posto_saude SET";
        $sql .= " nome = '$nome', rua = '$rua', bairro = '$bairro', tipo = '$tipo', fila_ps = '$tamFila', tempo_med_atendimento = '$tempoMedio'";
        $sql .= " WHERE cod_ps ='$cod'";
        mysqli_query($link,$sql) or die("Erro ao tentar atualizar registro");
        mysqli_close($link);

        echo "PS atualizado com sucesso!";
    

    
?>
</body>
</html>