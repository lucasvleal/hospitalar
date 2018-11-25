<?php require 'header.php'; ?>

    <div class="containerMeu" id="containerMarcar" style="height: 300px;">
        <h1>Marcar consulta.</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h3>Escolha o PS:</h3>
                <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btnMarcar btn " type="button" onclick="aparecer()">Buscar</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                </form>
            </div>
        </div> <!--/row-->

        <div class="medicoMarcar">
        <div class="row boxAcesso" style="margin-bottom: 50px">
            <div class="col-md-4 col-sm-12">
                <h3>Escolha o Médico disponível no PS:</h3>
                <form>
                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btnEscolher" style="margin-top: 30px;">Escolher</button>
                    </div>
                </form>
            </div>

            <!-- <div class="horarioMarcar"> -->
            <div class="col-md-8 col-sm-12 horarioMarcar">
                <h3 class="secundaryColor">Nome do Médico</h3>
                <h3>Escolha o horário</h3>
                <form>                    <select class="custom-select">
                        <option selected>Open this select menu</option>
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