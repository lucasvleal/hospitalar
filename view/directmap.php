<?php
require 'conmaps.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$cid = $_POST['cid'];
$end = $_POST['end'];
$uf = $_POST['uf'];
$r1 = $_POST['customRadio'];
$r2 = $_POST['customRadio2'];
$r3 = $_POST['customRadio3'];


$query = "SELECT nome, fila_ps*tempo_med_atend,rua,bairro,cidade,estado FROM posto_saude WHERE particular = '$r3' and tipo_ps = '$r2' ORDER BY $r1 DESC
";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) != 0){
    $dados = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $rua = $dados['rua'];
    $bairro = $dados['bairro'];
    $cidade = $dados['cidade'];
    $uff = $dados['estado'];
    $pstnome = $dados['nome'];
    $atend = $dados['fila_ps*tempo_med_atend'];

    $des = "$rua"." - "."$bairro"." - "."$cidade"." - "."$uff";
}
else{
    $des = "R. José Bongiovani, 1297 - Cidade Universitária, Pres. Prudente - SP";
}

$org = $end." - ".$cid." - ".$uf;

$_SESSION['org'] = $org;
$_SESSION['des'] = $des;
$_SESSION['pstnome'] = $pstnome;
$_SESSION['atend'] = $atend;

header("Location:index.php");
?>