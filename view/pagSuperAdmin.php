<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Hospitalar - SuperAdmin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 

	

	<!-- CDN Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- CDN Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- <script  type="text/javascript">
    function bloqueio() {	
        if (document.getElementById("divprincipal").style.display == "none") 	  {
                       document.getElementById("divprincipal").style.display = "block";	  
                    }	else	  {		  
                        document.getElementById("divprincipal").style.display = "none";	  	  
                    }  
    }
    </script> -->
    <script src="../js/bootstrap.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="headerAdmin row">
        <div class="col-md-2 d-flex justify-content-center align-items-center">
            <span style="font-weight: bold;"><a href="admin.php"> < TELA LOGIN</a></span>
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
            <div class="col-md-3 col-esq " >
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="menuAdmin d-flex justify-content-center">
                        <img src="../imgs/icons8-adicionar-administrador-50.png">&nbsp;
                        
                    </div>
                    <a id="v-pills-addMed-tab" role="tab" data-toggle="pill" aria-controls="addMed" aria-selected="true" class="nav-link linkAdm secundaryColor-hover" href="#addMed">
                        Adicionar Médico
                    </a>
                    
                    <div class="menuAdmin d-flex justify-content-center">
                        <img src="../imgs/icons8-adicionar-propriedade-50.png">&nbsp;
                        
                    </div>
                    <a id="v-pills-addPS-tab" role="tab" data-toggle="pill" aria-controls="addPS" aria-selected="false" class="nav-link linkAdm secundaryColor-hover" href="#addPS">
                        Adicionar Posto de Saúde
                    </a>

                    <div class="menuAdmin d-flex justify-content-center">
                        <img src="../imgs/icons8-adicionar-adm-50.png">&nbsp;
                        
                    </div>
                    <a id="v-pills-addAdm-tab" role="tab" data-toggle="pill" aria-controls="addAdm" aria-selected="false" class="nav-link linkAdm secundaryColor-hover" href="#addADM">
                        Adicionar Administrador
                    </a>
           
                </div>
                <!-- <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> -->
                <!-- <div class="">
                    <h3>Copyright: <a>Lucas & Giovanni</a></h3>
                </div> -->
            </div>
            <!-- /coluna da esquerda -->
           
            <!-- campo da direita -->
                <div class="col-md-9 col-dir">
                    <div class="tab-content" id="v-pills-tab-content">
                        <!--padrão-->
                        <div class="tab-pane fade boxCadastroMed active show "  role="tabpanel" style="height: 650px;">                               
                                <h1 style="color:black;text-align:center;">Painel de Controle do <span class="secundaryColor">Super</span>Admin</h1>
                                <h5 style="color:white;text-align:center;">Clique na opção desejada no menu à esquerda!</h5>                            
                        </div>
                        <!--/padrão-->

                        <!-- coluna da direita ADD MED-->
                        <div class="tab-pane fade boxCadastroMed  "  role="tabpanel" aria-labelledby="v-pills-addMed-tab" id="addMed">
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
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputCodPSCadastroMed">Código do Posto de Saúde que trabalha<span style="color: red;">*</span></label>
                                            <input name="codPS" type="text" class="form-control" id="inputCodPSCadastroMed" aria-describedby="emailHelp" placeholder="111">
                                        </div>                            
                                        <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>
                
                                        <div class="d-flex justify-content-center">                        
                                            <button type="submit" class="btn">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <!-- /coluna da direita -->

                        <!-- coluna da direita ADD PS-->
                        <div class="tab-pane fade boxCadastroMed" role="tabpanel" aria-labelledby="v-pills-addPS-tab" id="addPS">
                            <h3>Adicionar Posto de Saúde</h3>
                            <div class="boxAcesso">
                                    <form method="POST" action="../controller/cadastroPS.php">
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputCodCadastroPS">Código <span style="color: red;">*</span></label>
                                            <input name="cod" type="text" class="form-control" id="inputCodCadastroPS" placeholder="0011">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputNomeCadastroPS">Nome <span style="color: red;">*</span></label>
                                            <input name="nome" type="text" class="form-control" id="inputNomeCadastroPS" placeholder="UPS - Localidade">
                                        </div>
                                        <div class="form-group">
                                                <label class="meuLabel" for="inputRuaCadastroPS">Rua <span style="color: red;">*</span></label>
                                                <input name="rua" type="text" class="form-control" id="inputRuaCadastroPS" placeholder="Av. Manoel Goulart, Nº">
                                            </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputBairroCadastroPS">Bairro <span style="color: red;">*</span></label>
                                            <input name="bairro" type="text" class="form-control" id="inputBairroCadastroPS" placeholder="Centro">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputCidadeCadastroPS">Cidade<span style="color: red;">*</span></label>
                                            <input name="cidade" type="text" class="form-control" id="inputCidadeCadastroPS" placeholder="Presidente Prudente">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputEstadoCadastroPS">UF<span style="color: red;">*</span></label>
                                            <input name="estado" type="text" class="form-control" id="inputEstadoCadastroPS" placeholder="SP">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputTipoCadastroPS">Tipo do PS<span style="color: red;">*</span></label>
                                            <input name="tipo" type="text" class="form-control" id="inputTipoCadastroPS" placeholder="UPS">
                                        </div> 
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputTamFilaCadastroPS">Tamanho da Fila Inicial<span style="color: red;">*</span></label>
                                            <input name="tamFila" type="text" class="form-control" id="inputTamFilaCadastroPS" placeholder="10">
                                        </div> 
                                        <div class="form-group">
                                            <label class="meuLabel" for="inputTempoMedCadastroPS">Tempo Médio de consulta<span style="color: red;">*</span></label>
                                            <input name="tempoMedio" type="text" class="form-control" id="inputTempoMedCadastroPS" placeholder="15">
                                        </div>         

                                        <div class="form-group">
                                            <label class="meuLabel" for="inputParticular">Particular(1-Sim/0-Não) <span style="color: red;">*</span></label>
                                            <input name="particular" type="text" class="form-control" id="inputParticular" placeholder="0 ou 1">
                                        </div>

                                        <div class="form-group">
                                            <label class="meuLabel" for="inputLat">Latitude <span style="color: red;">*</span></label>
                                            <input name="lat" type="text" class="form-control" id="inputLat" placeholder="22.423123">
                                        </div>

                                        <div class="form-group">
                                            <label class="meuLabel" for="inputLong">Longitude <span style="color: red;">*</span></label>
                                            <input name="long" type="text" class="form-control" id="inputLong" placeholder="54.123565">
                                        </div>

                                        <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>
            
                                        

                                        <div class="d-flex justify-content-center">                        
                                            <button type="submit" class="btn">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <!-- /coluna da direita -->
                        <!-- coluna da direita ADD ADM-->
                        <div class="tab-pane fade boxCadastroMed  " role="tabpanel" aria-labelledby="v-pills-addADM-tab" id="addADM">
                            <h3>Adicionar Administrador</h3>
                            <div class="boxAcesso">
                                    <form action="../controller/cadastroAdmin.php" method="POST">
                                        <div class="form-group">
                                            <label class="meuLabel" for="LoginCadADM">Email <span style="color: red;">*</span></label>
                                            <input name="email" type="email" class="form-control" id="LoginCadADM" placeholder="exemplo@exemplo.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="meuLabel" for="SenhaCadADM">Senha <span style="color: red;">*</span></label>
                                            <input name="senha" type="password" class="form-control" id="SenhaCadADM" placeholder="******">
                                        </div>
                                        <div class="form-group">
                                                <label class="meuLabel" for="CodPS_ADM">Código do PS <span style="color: red;">*</span></label>
                                                <input name="codPS" type="text" class="form-control" id="CodPS_ADM" placeholder="0011">
                                        </div>
                                                                
                                        <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>
                
                                        <div class="d-flex justify-content-center">                        
                                            <button type="submit" class="btn">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <!-- /coluna da direita -->
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