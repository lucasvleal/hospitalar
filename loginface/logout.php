<?php
    include './face.php';
    session_destroy();
    unset($_SESSION['acess_token']);
    $_SESSION['login'] = 0;
    header("Location:../view/index.php");
?>