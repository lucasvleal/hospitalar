<html>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT login,senha FROM user_admin WHERE login ='$email'  AND senha = '$senha' ";
    
    $autenticar = mysqli_query($link,$sql);
    $total = mysqli_num_rows($autenticar);

    if($total == 0){
        echo "Erro no login!!"; // <script>history.back();</script>";        
    } else{
        $dados = mysqli_fetch_array($autenticar,MYSQLI_ASSOC);
        $autentica_email = explode('@',$email);        

        if($autentica_email[1] == 'superadmin.com'){            
            header("Location: ../view/PagSuperAdmin.php");
        } else if($autentica_email[1] == 'admin.com'){
            header("Location: ../view/PagAdmin.php");
        } else {
            echo "logou usuario!";
        }
    }

   
?>
</body>
</html>