
<?php require 'header.php'; ?>

	 <!-- Container -->
	 <div class="containerMeu">
	 	<!-- ROW 1 -->
	 	<div class="row align-items-start">
	 		<!-- Col 1-->
	 		<div class="col-8" style = "padding: 0px;">
	 			<div class="map">
					<?php if(isset($_SESSION['org'])):?>
					<?php require 'directmapexib.php'?>
					<?php else:?>		
					<iframe src = "maps.php" style = "width:100%;height:400px; border:none;"></iframe>
					<?php endif;?>					
				</div>

	 		</div>
	 		<!-- /col 1-->

	 		<!-- Col 2 -->
	 		<div class="col-4">
			 <form method="POST" action="directmap.php">				  				    
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="ENDEREÇO ATUAL" name="end" id="end">				  				    
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="CIDADE" name="cid" id="cid">
				    <input type="text" class="formLocalizacao" aria-describedby="endereçoHelp" placeholder="ESTADO" name="uf" id="uf">

						<h6>SELECIONE O TIPO DE ATENDIMENTO:</h6>
						<div class="divRadios">
							<div class="custom-control custom-radio">
								<input type="radio" id="fila_ps*tempo_med_atend" value="fila_ps*tempo_med_atend" name="customRadio" class="custom-control-input">
								<label class="custom-control-label" for="fila_ps*tempo_med_atend">Menor tempo de consulta</label>
							</div>
						</div>
				
						<h6>SELECIONE O TIPO DE POSTO DE ATENDIMENTO:</h6>
						<div class="divRadios">
							<div class="custom-control custom-radio">
								<input type="radio" id="hospital" value="hospital" name="customRadio2" class="custom-control-input">
								<label class="custom-control-label" for="hospital">Hospital</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="posto saúde" value="posto saúde" name="customRadio2" class="custom-control-input">
								<label class="custom-control-label" for="posto saúde">Posto de Saúde</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="upa" value="upa" name="customRadio2" class="custom-control-input">
								<label class="custom-control-label" for="upa">UPA</label>
							</div>
						</div>
				
						<h6>SELECIONE O TIPO DE ATENDIMENTO:</h6>
						<div class="divRadios">
							<div class="custom-control custom-radio">
								<input type="radio" id="1" value="1" name="customRadio3" class="custom-control-input">
								<label class="custom-control-label" for="1">Particular</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="0" value="2" name="customRadio3" class="custom-control-input">
								<label class="custom-control-label" for="0">Público</label>
							</div>
						</div>

				    <button type="submit" class="btn" name = "btn1" id = "btn1" >LOCALIZAR</button>
				</form>

	 		</div>
	 		<!-- /col 2-->	 		
	 	</div>
	 	<!-- /row 1-->
	 </div>
	 <!-- /container-->

<?php require 'footer.php'; ?>
      