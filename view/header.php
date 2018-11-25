<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Hospitalar</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 

	

	<!-- CDN Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- CDN Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.js"></script>
</head>
<body id="grad">
	 <!-- Header -->
	 <header class="navbar navbar-expand-lg hpNavBar">
		  <a class="navbar-brand hpLogoNavBar" href="index.php">
		  	<!--<img src="imgs/logoSombraBranca.png" width="150"  alt="">-->
		  	<h3>HOSPITA<span class="spanLar">LAR</span></h3>
			</a>
			
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="hpButton"><i class="fas fa-bars"></i></span>
			</button>
			
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link active hpTextNavBar aNavBar" href="index.php">INÍCIO <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link hpTextNavBar aNavBar" href="qualProcurar.php">QUAL PS PROCURAR?</a>
		      <a class="nav-item nav-link hpTextNavBar aNavBar" href="quemSomos.php">QUEM SOMOS</a>
					<?php require '../loginface/face.php';?>
					<?php if(isset($_SESSION['acess_token'])|| isset($_SESSION['nome'])):?>
					<a class="nav-item nav-link hpTextNavBar aNavBar" href="agendamento.php">AGENDAMENTO</a>
					<h4 class = "nav-item nav-link hpTextNavBar " style = "font-size: 20px;cursor:default;" > Olá, <strong><?php echo $_SESSION['nome']?></strong> ! </h4><a class="nav-item nav-link hpTextNavBar aNavBar" href="../loginface/logout.php"> Logout </a>
					<?php else:?>
						<a class="nav-item nav-link hpTextNavBar aNavBar" href="acesso.php">ACESSO</a>
					<?php endif;?>	      
		    </div>
		  </div>
	 </header>
     <!-- /header-->