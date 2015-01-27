<?php
session_start();
$META_TITLE = 'Programe su periodo de prueba';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Programe su periodo de prueba";
?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1><?php echo $PAGE_TITLE; ?></h1>
					<h2>Sin contrato de por medio, sin complicaciones</h2>

					<!-- Form -->

					<form role="form" class="g-col-8" method="POST" action="/trial_thanks.php" id="signupForm" enctype="multipart/form-data">
						<div class="form-group">
							<label for="first_name">Nombre</label>
							<input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="<?=$_SESSION[calculator][first_name];?>" required autofocus="autofocus">
						</div>
						<div class="form-group">
							<label for="last_name">Apellidos (Paterno y Materno)</label>
							<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" value="<?=$_SESSION[calculator][last_name];?>" required>
						</div>
						<div class="form-group">
							<label for="email">Correo electrónico</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="youremail@domain.com" value="<?=$_SESSION[calculator][email];?>" required>
						</div>
						<div class="form-group">
							<label for="phone">Teléfono</label>
							<input type="tel" id="phone" name="phone" class="form-control" placeholder="(###) ###-####" required> <!-- Not Auto Validated -->
						</div>
						<div class="form-group">
							<label for="employees">Número de empleados de la empresa</label>
							<input type="text" id="employees" name="employees" class="form-control" placeholder="" value="<?=$_SESSION[calculator][number_of_employees];?>" required>
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
							<label for="are_you_a_candidate">¿Eres un candidato buscando trabajo?</label>
							<select class="form-control" name="are_you_a_candidate" required>						
								<option value=""></option>
								<option value="1">Si</option>
								<option value="2">No</option>
							</select>
						</div>
						<div class="form-group">
							<label for="company_name">Nombre de empresa</label>
							<input type="text" id="company_name" name="company_name" class="form-control" placeholder="Your Company's Name" value="<?=$_SESSION[calculator][company_name];?>"  required>
						</div>
						<div class="form-group">
							<label for="website">Página Web de su empresa</label>
							<input type="text" id="website" name="website" class="form-control" placeholder="http://yourcompany.com" required>
						</div>
						<div class="form-group">
							<label for="website">¿Cuánto es 3 + 4?</label>
							<input type="text" id="simple_math" name="simple_math" class="form-control" placeholder="" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg">Enviar</button>
						</div>


					</form>

					<!-- End Form -->


				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>










