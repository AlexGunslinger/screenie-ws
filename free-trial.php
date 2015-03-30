<?php
session_start();
$META_TITLE = 'Programe el periodo de prueba para su empresa';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Programe el periodo de prueba para su empresa";
?>
<style>

.content-container
{
	min-height: 0px;
}

</style>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h2 style="font-weight:600"><?php echo $PAGE_TITLE; ?></h2>
					<p>Screenie es una plataforma digital que <b>ayuda a las empresas</b> a optimizar sus procesos de reclutamiento y selección. 
						Para solicitar el periodo de prueba para tu empresa, llena el siguiente formulario. 
						<br><br>
						
					

<script>
function myFunction() {
    var x = document.getElementById("candidate").value;
    if(x==1)
    {
    	document.getElementById('form').style.display= 'none';
    	document.getElementById('red').style.display= 'block';
    	document.getElementById('red').style.color= 'red';

    }
    if(x==2)
    {
    	document.getElementById('form').style.display= 'block';
    	document.getElementById('red').style.display= 'none';

    }
   
}
</script>


					<!-- Form -->

					<form role="form" class="g-col-8" method="POST" action="/trial_thanks.php" id="signupForm" enctype="multipart/form-data">
						<?php if(isset($_GET['wm'])){ echo "</br><label style='color:red'>No se pudo completar el formulario: <br>Compruebe su respuesta de 3 + 4.</label>"; } ?>
						<?php if(isset($_GET['wp'])){ echo "</br><label style='color:red'>No se pudo completar el formulario: <br>Compruebe que su tel&eacute;fono este conformado por 10 dígitos.</label>"; } ?>
						<div class="form-group">
						<label for="are_you_a_candidate">¿Eres una persona buscando una oportunidad laboral que <b>NO</b> deseas adquirir un periodo de prueba con Screenie?</label>
							<select id="candidate" class="form-control" name="are_you_a_candidate" onchange="myFunction()" required>						
								<option value=""></option>
								<option value="1">Si</option>
								<option value="2">No</option>
							</select>
							<div id="red">
							<label style="color:red">* </label> Si eres una persona en busca de vacantes que <b>NO</b> desea adquirir el periodo de prueba de Screenie, encuentra más información sobre
						las vacantes que tienen las empresas que usan Screenie en nuestro 
						<a href="https://www.facebook.com/ScreenieInc">Facebook</a> o <a href="https://twitter.com/ScreenieMx">Twitter</a>.</p></div>
						</div>
						
						<div id="form" class='visible'>	
							<h3>Formulario para solicitar el periodo de prueba:</h3>
						<div class="form-group">
							<label for="first_name">Nombre</label>
							<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Nombre(s)" value="<?=$_SESSION[calculator][first_name];?>" required autofocus="autofocus">
						</div>
						<div class="form-group">
							<label for="last_name">Apellidos</label>
							<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Apellidos" value="<?=$_SESSION[calculator][last_name];?>" required>
						</div>
						<div class="form-group">
							<label for="email">Correo electrónico corporativo</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Correo corporativo" value="<?=$_SESSION[calculator][email];?>" required>
						</div>
						<div class="form-group">
							<label for="phone">Teléfono a 10 dígitos</label>
							<input type="tel" id="phone" name="phone" class="form-control" placeholder="(##) #### ####" required> <!-- Not Auto Validated -->
						</div>
						<div class="form-group">
							<label for="employees">Número de empleados de la empresa</label>
							<input type="text" id="employees" name="employees" class="form-control" placeholder="#" value="<?=$_SESSION[calculator][number_of_employees];?>" required>
						</div>
						<div class="form-group">
							<label for="hear">¿Cómo se enteró de nosotros?</label>
							<select class="form-control" name="hear">						
								<option value="Search Engine">Buscador Web</option>
								<option value="Client Referral">Referencia</option>
								<option value="Seminar or Event">Evento o seminario</option>
								<option value="Webinar">Webinar</option>
								<option value="Other">Otro</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="company_name">Nombre de empresa interesada en la prueba</label>
							<input type="text" id="company_name" name="company_name" class="form-control" placeholder="Escribe el nombre de tu empresa." value="<?=$_SESSION[calculator][company_name];?>"  required>
						</div>
						<div class="form-group">
							<label for="website">Página Web de su empresa</label>
							<input type="text" id="website" name="website" class="form-control" placeholder="Escribe la página web de tu empresa." required>
						</div>
						<div class="form-group">
							<label for="website">Prueba: ¿Cuánto es 3 + 4?</label>
							<input type="text" id="simple_math" name="simple_math" class="form-control" placeholder="" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg">Enviar</button>
						</div>
					</div>

					</form>

					<!-- End Form -->


				</div>
			</div> <!-- </section> -->

<?php
include_once 'includes/footer.php';
?>










