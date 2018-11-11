<html>
<body>
<?php

    $link = mysqli_connect("localhost", "root", "", "hospitalar_web");

    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT login,senha FROM usuario WHERE login ='$email'  AND senha = '$senha' ";
    
    $autenticar = mysqli_query($link,$sql);
    $total = mysqli_num_rows($autenticar);

    if($total == 0){
        die('Não existe saporra '. mysql_error());
    } else{
        echo "logou";
    }

   
?>
</body>
</html>