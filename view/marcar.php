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
    <?php $query = "SELECT `cod_ps`, `nome` from `posto_saude`";
          $result = mysqli_query($con, $query);
    ?>
        <h1>Marcar consulta.</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h3>Escolha o PS:</h3>
                <form action="" method="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btnMarcar btn " type="submit" onclick="aparecer()">Buscar</button>
                    </div>
                    <select name = "escolha" class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <?php while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                        <option value="<?php echo $dados['cod_ps'];?>"><?php echo $dados['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                </form>
            </div>
        </div> <!--/row-->

        <div class="medicoMarcar">
        <div class="row boxAcesso" style="margin-bottom: 50px">
            <div class="col-md-4 col-sm-12">
            <?php 
                  if(isset($_SESSION['id'])){
                  $cod_id = $_SESSION['id'];
                  $query1 = "SELECT `nome` from `medico` where cod_ps = $cod_id";
                  $result1 = mysqli_query($con, $query1);
                  }
            ?>
                <h3>Escolha o Médico disponível no PS:</h3>
                <form action="#" method="GET">
                    <select name="escolhaM" class="custom-select" id = "escolhaMédico">
                        <option>Escolha</option>
                        <?php while ($dados1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){ ?>
                        <option value="<?php echo $dados1['nome'];?>"><?php echo $dados1['nome'] ?></option>
                        <?php } ?>
                    </select>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btnEscolher" style="margin-top: 30px;">Escolher</button>
                    </div>
                </form>
            </div>

            <!-- <div class="horarioMarcar"> -->
            <div class="col-md-8 col-sm-12 horarioMarcar">
                <h3 class="secundaryColor"><?php echo $_SESSION['nomeM'] ?></h3>
                <h3>Escolha o horário</h3>
                <form>                    <select class="custom-select">
                        <option selected>Escolha...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn" style="margin-top: 30px;">Marcar</button>
                    </div>    
                </form>
                
            </div>
            </div>
        </div> <!--/row-->
        <!-- </div> -->
    </div>

<script>

    $('.btnMarcar').on('click', function() {
        $('.medicoMarcar').css({'display':'block'});
        $('#containerMarcar').removeAttr('style');
    });

    $('.btnEscolher').on('click', function() {
        $('.horarioMarcar').css({'display':'block'});
    });
</script>

<?php require 'footer.php'; ?>