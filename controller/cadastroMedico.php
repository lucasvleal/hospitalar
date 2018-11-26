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


    $email = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $CRM = $_POST['CRM'];
    $espec = $_POST['espec'];
    $codPS = $_SESSION['codPS'];

    $sql = "INSERT INTO medico VALUES ";
    $sql .= "('$nome', '$CRM', '$espec', '$codPS', '$email', '$senha')"; 
    mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($link);

    // $auth = explode("@",$_SESSION['emailAdm']);
    
    // if($auth[1] == "admin.com"){
    //     header("Location: ../view/pagSuperAdmin.php");
    // }
    // else if($auth[1] == "superadmin.com"){
    //     header("Location: ../view/pagSuperAdmin.php");
    // }
?>

<script>
    history.go(-1);
</script>
</body>
</html>