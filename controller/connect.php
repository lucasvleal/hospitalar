<?php 
    $username = 'root';
   // $password = 'root';
    

    try {
        $connectate = new PDO('mysql:host=localhost;dbname=hospitalar_web',$username);
        $connectate->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $nome = $connectate->query('SELECT nome FROM usuario');
        $idade = $connectate->query('SELECT idade FROM usuario');
  
        echo '<h1>Nome do Usuario </h1>';
        foreach($nome as $row) {
            print_r($row);
            echo '<br />';            
        }

        echo '<br /><br />';

        echo '<h1>Idade do Usuario </h1>';
        foreach($idade as $linha){
            print_r($linha);
            echo '<br />';
        }
      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }
?>