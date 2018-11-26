<?php require 'header.php'; ?>
<?php require 'conmaps.php'; 
     if(!isset($_SESSION)) 
     { 
         session_start(); 
     };
     
    if(isset($_GET['escolha'])){
     $_SESSION['id'] = $_GET['escolha'];
    }

    if(isset($_GET['escolhaM'])){
        $_SESSION['nomeM'] = $_GET['escolhaM'];
    }
?>
    <div class="containerMeu" id="containerMarcar" style="height: 300px;">
    
        <!-- pegando os PS do banco -->
        <?php $query = "SELECT `cod_ps`, `nome` from `posto_saude`";
            $result = mysqli_query($con, $query);
        ?>

        <h1>Marcar consulta.</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12">

                <!-- SELECT DO PS -->
                <h3>Escolha o PS:</h3>
                <form action="" method="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btnMarcar btn " type="button">Buscar</button>
                    </div>
                    <select name = "escolha" class="custom-select selectPS" id="selectPS" aria-label="Example select with button addon">
                        <option selected>Escolha o PS...</option>
                        
                        <!-- colocando os ps nas option do select -->
                        <?php while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                            <option value="<?php echo $dados['cod_ps'];?>"><?php echo $dados['nome'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                </form>
                <!-- SELECT DO PS -->


            </div>
        </div> <!--/row-->

        <div class="medicoMarcar">     
            <div class="row boxAcesso" style="margin-bottom: 50px">
                <div class="col-md-4 col-sm-12">

                    <!-- SELECT DO MEDICO -->
                        <h3>Escolha o Médico disponível no PS:</h3>
                        <form action="#" method="GET" id="formMed">
                            <select name = "escolhaM" class="custom-select selectMed" id="selectMedico">
                                <option selected>Escolha o Médico...</option>
                                <option value="1">Dr. Lucas</option>
                                <option value="2">Dr. Giovanni</option>
                                <option value="3">Dr. Ronaldo</option>
                            </select>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btnEscolher" style="margin-top: 30px;">Escolher</button>
                            </div>
                        </form>
                    <!-- SELECT DO MEDICO -->
                </div>

                <!-- <div class="horarioMarcar"> -->
                <div class="col-md-8 col-sm-12 horarioMarcar">
                    <h3 class="secundaryColor nomeMedico">Nome do Médico</h3>

                        <!-- SELECT DO HORARIO -->
                        <h3>Escolha o horário</h3>
                        <form>                    
                            <select class="custom-select">
                                <option selected>Escolha a hora disponivel...</option>
                                <option value="1">9h00</option>
                                <option value="2">12h00</option>
                                <option value="3">14h30</option>
                            </select>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn" style="margin-top: 30px;">Marcar</button>
                            </div> 
                        <!-- SELECT DO HORARIO -->
                        </form>
                        
                    
                </div>
            </div>
        </div> <!--/row-->
        <!-- </div> -->
    </div>

<script> 
    $('.btnMarcar').on('click', function() {
        $('#containerMarcar').removeAttr('style');
        $('.medicoMarcar').css({'display':'block'});        
    });

    $('.btnEscolher').on('click', function() {
        $('.horarioMarcar').css({'display':'block'});
    });
//     $('.btnMarcar').click(function(){
// 	var select1 = $('.selectPS option:selected').val();
// 	$.ajax({
// 		type: 'post',
// 		url: 'localhost/hospitalar/controller/scriptMedico.php',
// 		data: {escolha: select1},
//         dataType: 'html',
// 		success: function(data){
//             data = $.parseJSON(data);
//             alert("succes");
// 			$('#containerMarcar').removeAttr('style');
//             $('.medicoMarcar').css({'display':'block'});
            
//             // for(var i in data){
//             //     nome = data["nome"];
//             //     espec = data["especializacao"];
//             //     crm = data["CRM"];
//             //     $('.selectMed').append('<option value="crm"> nome - espec </option>');
//             // }  

//             $.each(data.result, function(i){
//                 $('.selectMed').append('<option value="data["CRM"]> data["nome"] - data["especializacao"] </option>');
//             });     
// 		},
//         error: alert("ta errando bobao");
// 	});
// });
</script>

<?php require 'footer.php'; ?>