<?php

$META_TITLE = 'Certificado';

include_once 'includes/header.php';

$PAGE_TITLE = "Certificado";

?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div id="responsive-wrapper">
		
		<div id="main-wrapper">



			<div id="content-viewport">
				
				<section class="slide" style="width:80%; margin:0 auto;">
					<br>
					<div class="slide-header">
						<h1 class="slide-title">Certifícate</h1>
					</div>
					
					<br />
					
					<?php if(isset($_GET['ad'])){echo "<label style='color:red'>*Lo sentimos, solamente se puede descargar el certificado una vez.</label><br>";}?>
					<?php if(isset($_GET['nv'])){echo "<label style='color:red'>*Lo sentimos, no esta registrado en este curso.</label><br>";}?>
					<?php if(isset($_GET['nl'])){echo "<label style='color:red'>*Por favor, llene todos los datos.</label><br>";}?>
					<?php if(isset($_GET['wn'])){echo "<label style='color:red'>*Los nombres no coinciden</label>";}?>
					<?php if(isset($_GET['wi'])){echo "<label>Ha descargado su certificado satisfactoriamente.</label>";}?>
						
					
					<form method="POST" role="form" action="certificate_manager.php" id="signup_form" name="signup_form">

						
						
						<div class="form-group">
							<label>Nombre como aparecerá en el Certificado:</label>
							<input type="text" name="name_on_certificate" id="name_on_certificate" style="width:100%;height:40px;font-size:15px;" class="is_required" value="" />
						</div>
						<div class="form-group">
							<label>Confirma el nombre:</label>
							<input type="text" name="name_on_certificate_check" id="name_on_certificate_check" onblur="compareFields(this.value);" style="width:100%;height:40px;font-size:15px;" class="is_required" value="" />
						</div>
						<div class="form-group">
							<label>Correo electrónico registrado:</label>
							<input type="email" name="email" id="email" style="width:100%;height:40px;font-size:15px;" class="is_required" value="" />
						</div>
						<div class="form-group">
							<label>Nombre del curso:</label>
							<select name="curso" id="curso" style="width:100%;height:40px;font-size:15px;padding:5px;" class="form-control">
							  <option value="1">Mejores Prácticas</option>
							  <option value="2">Redes Sociales</option>
							</select>
						</div>

						<br><br>
						<div style="width:100%;font-size:15px;cursor:pointer;text-align:center;background-color:#6fb822;color:white;padding:10px;" class="action_button" onclick="document.forms['signup_form'].submit();">
						Certificate
						</div>


						<br /><br /><br />
															
					</form>
					
					<br />
																					
				</section>					
									
			</div>
			
		</div>
			
	</div>


<?php
include_once 'includes/footer.php';
?>










