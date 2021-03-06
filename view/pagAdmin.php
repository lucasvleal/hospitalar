<!DOCTYPE html>
<html lang="pt-br">
<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<head>
    <?php require 'conmaps.php' ?>
	<meta charset="utf-8">
	<title>Hospitalar - Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 

	<!-- CDN Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- CDN Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
    <script src="../js/bootstrap.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="headerAdmin row">
        <div class="col-md-2 d-flex justify-content-center align-items-center">
            <span style="font-weight: bold;"><a href="admin.php" class="secundaryColor-hover"> < TELA LOGIN</a></span>
        </div>  
        <div class="col-md-10  d-flex justify-content-center align-items-center">
            <h3>HOSPITA<span class="spanLar">LAR</span></h3>
        </div> 
             
    </div>
    <!-- /Header -->

    <!-- Container -->
    <div class="containerAdmin">
        <div class="row">               
            <!-- coluna da esquerda -->
                <div class="col-md-3 col-esq ">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="menuAdmin d-flex justify-content-center">
                            <img src="../imgs/icons8-adicionar-administrador-50.png">&nbsp;
                            <span class=" d-flex align-items-center">
                        </div>
                        <a class="nav-link linkAdm secundaryColor-hover" href="#addMed" id="v-pills-addMed-tab" role="tab" data-toggle="pill" aria-controls="addMed" aria-selected="true">Adicionar Médico</a></span>
                        
                        <div class="menuAdmin d-flex justify-content-center">
                            <img src="../imgs/icons8-atualizar2-50.png">&nbsp;
                            <span class=" d-flex align-items-center">
                        </div> 
                        <a class="nav-link linkAdm secundaryColor-hover" href="#attPS" id="v-pills-attPS-tab" role="tab" data-toggle="pill" aria-controls="attPS" aria-selected="false">Atualizar Dados do PS</a></span>
                                           
                    </div>
                    <!-- <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    <div class="">
                        <h3>Copyright: <a>Lucas & Giovanni</a></h3>
                    </div> -->
                </div>
            <!-- /coluna da esquerda -->

            <!-- campo da direita -->                
                <div class="col-md-9 col-dir">
                    <div class="tab-content" id="v-pills-tab-content">
                        <!--padrão-->
                        <div class="tab-pane fade boxCadastroMed active show "  role="tabpanel" style="height: 650px;">                               
                                <h1 style="color:black;text-align:center;">Painel de Controle do <span class="secundaryColor">Admin</span></h1>
                                <h5 style="color:white;text-align:center;">Clique na opção desejada no menu!</h5>                            
                        </div>
                        <!--/padrão-->

                        <!-- coluna da direita ADD MED-->
                        <div class="tab-pane fade boxCadastroMed " role="tabpanel" id="addMed" aria-labelledby="v-pills-addMed-tab">
                            <h3>Adicionar Médico</h3>
                            <div class="boxAcesso">
                                    <form method="POST" action="../controller/cadastroMedico.php">
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputEmailCadastroMed">Email <span style="color: red;">*</span></label>
                                            <input name="login" type="email" class="form-control" id="inputEmailCadastroMed" aria-describedby="emailHelp" placeholder="exemplo@hospitalar.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputSenhaCadastroMed">Senha <span style="color: red;">*</span></label>
                                            <input name="senha" type="password" class="form-control" id="inputSenhaCadastroMed" placeholder="******">
                                        </div>
                                        <div class="form-group">
                                                <label class="meuLabel" for="inputNomeCadastroMed">Nome completo <span style="color: red;">*</span></label>
                                                <input name="nome" type="text" class="form-control" id="inputNomeCadastroMed" aria-describedby="emailHelp" placeholder="Lucas Viani Leal">
                                            </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputCRMCadastroMed">CRM <span style="color: red;">*</span></label>
                                            <input name="CRM" type="text" class="form-control" id="inputCRMCadastroMed" aria-describedby="emailHelp" placeholder="0000/SP">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputEspCadastroMed">Especialização<span style="color: red;">*</span></label>
                                            <input name="espec" type="text" class="form-control" id="inputEspCadastroMed" aria-describedby="emailHelp" placeholder="Psiquiatra">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="meuLabel" for="inputCodPSCadastroMed">Código do Posto de Saúde que trabalha<span style="color: red;">*</span></label>
                                            <input name="codPS" type="text" class="form-control" id="inputCodPSCadastroMed" aria-describedby="emailHelp" placeholder="111">
                                        </div>                             -->
                                        <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>
                
                                        <div class="d-flex justify-content-center">                        
                                            <button type="submit" class="btn">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <!-- /coluna da direita -->

                        <!--coluna da direita ATT PS-->
                        <div class="tab-pane fade boxCadastroMed" role="tabpanel" id="attPS" aria-labelledby="v-pills-attPS-tab">
                            <h3>Atualizar Posto de Saúde</h3>
                            <div class="boxAcesso">
                                    <form method="POST" action="../controller/atualizaPS.php">
                                        <div class="form-group">
                                            <label class="meuLabel" for="nomeAttPS">Nome</label>
                                            <input name="nome" type="text" class="form-control" id="nomeAttPS" value="<?php echo $_SESSION['nomehosp'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="ruaAttPS">Rua</label>
                                            <input name="rua" type="text" class="form-control" id="ruaAttPS" value="<?php echo $_SESSION['rua'];?>">
                                        </div>
                                        <div class="form-group">
                                                <label class="meuLabel" for="bairroAttPS">Bairro</label>
                                                <input name="bairro" type="text" class="form-control" id="bairroAttPS" value = "<?php echo $_SESSION['bairro'];?>">
                                            </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="tipoAttPS">Tipo do PS</label>
                                            <input name="tipo" type="text" class="form-control" id="tipoAttPS" value = "<?php echo $_SESSION['tipo_ps'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="filaAttPS">Tamanho da Fila no momento</label>
                                            <input name="tamFila" type="text" class="form-control" id="filaAttPS"  value = "<?php echo $_SESSION['fila_ps'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="tempoMedioAttPS">Tempo Médio</label>
                                            <input name="tempoMedio" type="text" class="form-control" id="tempoMedioAttPS"  value = "<?php echo $_SESSION['tempo_med_atend'];?>">
                                        </div>                            
                
                                        <div class="d-flex justify-content-center">                        
                                            <button type="submit" class="btn">Atualizar</button>
                                        </div>
                                    </form>
                                </div> 
                        </div>
                    </div>
                </div>
            <!-- /campo da direita -->
        </div>
    </div>
    <!-- /Container -->

    <!-- Footer -->	
    <footer class="page-footer font-small pt-4 hpFooter">
        <!-- Container Links -->
        <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">   
            <!-- Grid column 3 -->
            <div class="col-md-12 mb-md-0 mb-3 d-flex align-items-center justify-content-center" style="padding: 20px; text-align: center;">
                <!-- Facebook -->
                <a href="https://www.facebook.com/lucas.vianileal" target="_blank">
                <i class="fab fa-facebook fa-lg fa-2x terciaryColor"> </i>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/lealdad_" target="_blank">
                <i class="fab fa-twitter fa-lg fa-2x terciaryColor"></i>
                </a>	            
                <!--Instagram-->
                <a href="https://www.instagram.com/lealdad_/" target="_blank">
                <i class="fab fa-instagram fa-lg fa-2x terciaryColor"> </i>
                </a>  
            </div>
            <!-- /grid column 3-->

        </div>
        <!-- /grid row-->

        </div>
        <!-- /container links-->

        <!-- Copyright -->
        <div class="footer-copyright text-center hpFooterBaixo hpTextFooter">© 2018 Copyright:
        <a href="https://www.instagram.com/lealdad_/" target="_blank"> Lucas & Giovanni Coop.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- /footer-->
</body>
</html>