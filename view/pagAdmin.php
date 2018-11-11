<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Hospitalar - Admin</title>
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
    <!-- <script  type="text/javascript">
    function bloqueio() {	
        if (document.getElementById("divprincipal").style.display == "none") 	  {
                       document.getElementById("divprincipal").style.display = "block";	  
                    }	else	  {		  
                        document.getElementById("divprincipal").style.display = "none";	  	  
                    }  
    }
    </script> -->
</head>
<body>
    <!-- Header -->
    <div class="headerAdmin row">
        <div class="col-md-2 d-flex justify-content-center align-items-center">
            <span style="font-weight: bold;"><a href="index.html"> < INICIO</a></span>
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
                <div class="">
                    <div class="menuAdmin d-flex justify-content-center">
                        <img src="../imgs/icons8-adicionar-administrador-50.png">&nbsp;
                        <span class="txtMenuAdmin d-flex align-items-center"><a href="#addMed" data-toggle="collapse">Adicionar Médico</a></span>
                    </div>
                    <div class="menuAdmin d-flex justify-content-center">
                        <img src="../imgs/icons8-atualizar2-50.png">&nbsp;
                        <span class="txtMenuAdmin d-flex align-items-center"><a href="#attPS" data-toggle="collapse">Atualizar Dados do PS</a></span>
                    </div>                    
                </div>
                <!-- <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> -->
                <!-- <div class="">
                    <h3>Copyright: <a>Lucas & Giovanni</a></h3>
                </div> -->
            </div>
            <!-- /coluna da esquerda -->

            <!-- coluna da direita ADD MED-->
            <div class="col-md-9 col-dir boxCadastroMed collapse show" id="addMed">
                <h3>Adicionar Médico</h3>
                <div class="boxAcesso">
                        <form>
                            <div class="form-group">
                                <label class="meuLabel" for="inputEmailCadastroMed">Email <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="inputEmailCadastroMed" aria-describedby="emailHelp" placeholder="exemplo@hospitalar.com">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="inputSenhaCadastroMed">Senha <span style="color: red;">*</span></label>
                                <input type="password" class="form-control" id="inputSenhaCadastroMed" placeholder="******">
                            </div>
                            <div class="form-group">
                                    <label class="meuLabel" for="inputNomeCadastroMed">Nome completo <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="inputNomeCadastroMed" aria-describedby="emailHelp" placeholder="Lucas Viani Leal">
                                </div>
                            <div class="form-group">
                                <label class="meuLabel" for="inputCRMCadastroMed">CRM <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="inputCRMCadastroMed" aria-describedby="emailHelp" placeholder="0000/SP">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="inputEspCadastroMed">Especialização<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="inputEspCadastroMed" aria-describedby="emailHelp" placeholder="Psiquiatra">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="inputCodPSCadastroMed">Código do Posto de Saúde que trabalha<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="inputCodPSCadastroMed" aria-describedby="emailHelp" placeholder="111">
                            </div>                            
                            <p style="color: white;"><span style="color: red;">*</span> - Campo obrigatório</p>
    
                            <div class="d-flex justify-content-center">                        
                                <button type="submit" class="btn">Adicionar</button>
                            </div>
                        </form>
                    </div>
            </div>
            <!-- /coluna da direita -->

            <!--coluna da direita ATT PS-->
            <div class="col-md-9 col-dir boxCadastroMed collapse" id="attPS">
                <h3>Atualizar Posto de Saúde</h3>
                <div class="boxAcesso">
                        <form>
                            <div class="form-group">
                                <label class="meuLabel" for="nomeAttPS">Nome</label>
                                <input type="text" class="form-control" id="nomeAttPS" placeholder="UPS - Jequitibás">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="ruaAttPS">Rua</label>
                                <input type="text" class="form-control" id="ruaAttPS" placeholder="José Kempe, Nº">
                            </div>
                            <div class="form-group">
                                    <label class="meuLabel" for="bairroAttPS">Bairro</label>
                                    <input type="text" class="form-control" id="bairroAttPS" placeholder="Jequitibás II">
                                </div>
                            <div class="form-group">
                                <label class="meuLabel" for="tipoAttPS">Tipo do PS</label>
                                <input type="text" class="form-control" id="tipoAttPS" placeholder="UPS">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="filaAttPS">Tamanho da Fila no momento</label>
                                <input type="text" class="form-control" id="filaAttPS"  placeholder="15">
                            </div>
                            <div class="form-group">
                                <label class="meuLabel" for="tempoMedioAttPS">Tempo Médio</label>
                                <input type="text" class="form-control" id="tempoMedioAttPS"  placeholder="25">
                            </div>                            
    
                            <div class="d-flex justify-content-center">                        
                                <button type="submit" class="btn">Atualizar</button>
                            </div>
                        </form>
                    </div> 
            </div>
        </div>
    </div>
    <!-- /Container -->
</body>
</html>