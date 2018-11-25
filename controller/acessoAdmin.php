<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT login,senha,cod_ps FROM user_admin WHERE login ='$email'  AND senha = '$senha' ";
    
    $autenticar = mysqli_query($link,$sql);
    $total = mysqli_num_rows($autenticar);

    if($total == 0){
        // echo "<script>alert(Erro no login!!);</script>";
        
        $erro = "<script>alert('Erro no Login'); </script>";
        $_SESSION['msgErro'] = 0;        
        header("Location: ../view/admin.php");         
    } else{
        $dados = mysqli_fetch_array($autenticar,MYSQLI_ASSOC);
        $autentica_email = explode('@',$email);        

        if($autentica_email[1] == 'superadmin.com'){            
            header("Location: ../view/PagSuperAdmin.php");
        } else if($autentica_email[1] == 'admin.com'){
            $_SESSION['codPS'] = $dados['cod_ps'];
            $cod = $dados['cod_ps'];
            $sql = "SELECT * FROM `posto_saude` WHERE cod_ps = $cod;";
            $result = mysqli_query($link, $sql);
            $dados = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['nomehosp'] = $dados['nome'];
            $_SESSION['rua'] = $dados['rua'];
            $_SESSION['bairro'] = $dados['bairro'];
            $_SESSION['tipo_ps'] = $dados['tipo_ps'];
            $_SESSION['fila_ps'] = $dados['fila_ps'];
            $_SESSION['tempo_med_atend'] = $dados['tempo_med_atend'];
            header("Location: ../view/PagAdmin.php");
        } else {
            echo "logou usuario!";
        }
    }

   
?>
</body>
</html>