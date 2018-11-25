<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Hospitalar - Administração</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 

	<script src="bootstrap.js"></script>

	<!-- CDN Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- CDN Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    
    
</head>
<body class="d-flex justify-content-center align-items-center col-md-12 col-sm-12">    
    <label for="inputLoginAdm" class="loginAdm">Login</label>
    
    <div class="alert alert-danger divErro" role="alert" id="erro">
            Erro no Login!
    </div>

    <div class="boxLoginAdm ">        
        <form action="../controller/acessoAdmin.php" method="POST">
            <div class="form-group">
                <label class="meuLabel" for="inputLoginAdm" style="color: #1C3687;">Email</label>
                <input name="login" type="email" class="form-control" id="inputLoginAdm" aria-describedby="emailHelp" placeholder="exemplo@hospitalar.com">
            </div>
                <div class="form-group">
                <label class="meuLabel" for="inputSenhaLoginAdm" style="color: #1C3687;">Senha</label>
                <input name="senha" type="password" class="form-control" id="inputSenhaLoginAdm" placeholder="******">
            </div>

            <div class="d-flex justify-content-center">                        
                <button type="submit" class="btn">Logar</button>
            </div>
        </form>
    </div>

        <?php if(isset($_SESSION['msgErro'])) { ?>
            
                <script>
                    
                    $('.divErro').css({'display':'block', });
                   
                </script>
                <?php session_destroy()?>
        <?php } ?>
    
</body>
</html>