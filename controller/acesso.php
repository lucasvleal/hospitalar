<html>
<body>
<?php


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    };

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['login'];
    $senha = $_POST['senha'];

    

    $sql = "SELECT login,senha,nome FROM usuario WHERE login ='$email'  AND senha = '$senha' ";
    
    $autenticar = mysqli_query($link,$sql);
    $total = mysqli_num_rows($autenticar);

    if($email == "" || $senha == ""){
       $_SESSION['erroAcesso'] = 1;
       header("Location:../view/acesso.php");
    }else{
        if($total == 0){
            $_SESSION['erroAcesso'] = 0;
            header("Location:../view/acesso.php");
        } else{
            $dados = mysqli_fetch_array($autenticar,MYSQLI_ASSOC);
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['login'] = 1;
            header("Location:../view/index.php");
        }
    }
    
   
?>
</body>
</html>