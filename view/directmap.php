<?php
session_start();
$cid = $_POST['cid'];
$end = $_POST['end'];
$uf = $_POST['uf'];
$des = "R. Wenceslau Braz, 5 - Vila Euclides, Pres. Prudente - SP";

$org = $end." - ".$cid." - ".$uf;
$_SESSION['org'] = $org;
$_SESSION['des'] = $des;
header("Location:index.php");
?>