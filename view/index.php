
<?php require 'header.php'; ?>

	 <!-- Container -->
	 <div class="containerMeu">
	 	<!-- ROW 1 -->
	 	<div class="row align-items-start">
	 		<!-- Col 1-->
	 		<div class="col-8">
	 			<form>				  				    
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="ENDEREÇO ATUAL">				  				    
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="CIDADE">
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="ESTADO">

				    <button type="" class="btn">LOCALIZAR</button>
				</form>

				<div class="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.107193857254!2d-51.40971798554895!3d-22.12188831589424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f43f0ff7f359%3A0x3ff5d10b95e4acbf!2sUnesp+-+Faculdade+de+Ci%C3%AAncias+e+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1536359756347" width="785" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
	 		</div>
	 		<!-- /col 1-->

	 		<!-- Col 2 -->
	 		<div class="col-4">
	 			<!-- Radios 1 -->
	 			<h6>SELECIONE O MODO DE BUSCA:</h6>
	 			<div class="divRadios">
		 			<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio1">Atendimento mais rápido</label>
					</div>
					
					<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio2">Posto mais perto</label>
					</div>
				</div>
				<!-- /radios 1-->

				<!-- Radios 2 -->
	 			<h6>SELECIONE O MODO DE BUSCA:</h6>
	 			<div class="divRadios">
		 			<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio3">Atendimento mais rápido</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio4">Posto mais perto</label>
					</div>
				</div>
				<!-- /radios 2-->

				<!-- Radios 3 -->
	 			<h6>SELECIONE O MODO DE BUSCA:</h6>
	 			<div class="divRadios">
		 			<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio5" name="customRadio3" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio5">Atendimento mais rápido</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio6" name="customRadio3" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio6">Posto mais perto</label>
					</div>
				</div>
				<!-- /radios 3-->
				<div class="d-flex justify-content-center">
					<button type="" class="btn btnBuscar">BUSCAR</button>
				</div>
	 		</div>
	 		<!-- /col 2-->	 		
	 	</div>
	 	<!-- /row 1-->
	 </div>
	 <!-- /container-->

<?php require 'footer.php'; ?>
      