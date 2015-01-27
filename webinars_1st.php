<?php
session_start();
$META_TITLE = 'Seminarios en Línea Gratuitos';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Seminarios en Línea Gratuitos";
?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>
					
					<div style="width:650px;float:left;">
						
						<h1 style="font-size:42px;"><?php echo $PAGE_TITLE; ?></h1>
						
						<img src="/images/brenda-pic.jpg" alt="Brenda Manjarrez" style="float:right;padding-top:10px;padding-left:25px;padding-right:25px;width:200px;" />
	
						<p><strong><u>Expositora - Brenda Manjarrez</u></strong></p>
																
						<ul>
							<li>Licenciada en Lingüística con Énfasis en Didáctica del Idioma Inglés de la UANL.</li>
							<li>Más de 10 años de experiencia en Capacitación.</li>
							<li>Experiencia en Recursos Humanos (Generalista).</li>
							<li>Especialista en Reclutamiento y Selección de Personal.</li>
							<li>Aficionada a la tecnología y su aplicación en los procesos de Reclutamiento y Selección.</li>
						</ul>
						
						<div style="clear:both"></div>
						
						<br />
						
						<h2 style="font-size:20px;"><u>Seminario Certificado de Mejores Prácticas de Reclutamiento y Selección</u></h2>
						
						<p>Aprende las mejores prácticas de reclutadores destacados de México</p>

						<p>Conviértete en un Reclutador Certificado de Screenie Nivel Oro y recibe un certificado oficial al completar el seminario. ¡Ideal para tu currículum!</p>

						<p>El curso te brindará las herramientas y conocimientos para:</p>
						<ul>
							<li>Organizar un efectivo proceso de Reclutamiento y Selección.</li>
							<li>Optimizar Descripciones de Puesto y Publicación de Vacantes para incrementar la atracción de talento.</li>
							<li>Determinar cómo, cuándo y dónde publicar las vacantes para mejores resultados. </li>
							<li>Filtrar y evaluar postulantes para identificar a los mejores candidatos de manera rápida y económica.</li>
							<li>Usar tecnología para hacer el proceso más eficiente.</li>
							<li>Hacer un reclutamiento más estratégico.</li>
							<li>Hacer que tu jefe te vea como una Estrella de Reclutamiento.</li>
						</ul>

						<p>Reclutadores que han tomado este curso han logrado reducir sus tiempos de reclutamiento, selección y contratación de personal en hasta un 80%, beneficiando así a su compañía. Además, han sido capaces de encontrar mejores candidatos para sus vacantes.</p> 

						<p style="font-size:10px;">*Para recibir la certificación, deberás acreditar las cuatro horas del curso, en cuatro sesiones de una hora.</p>
						
						<br />
						
						<h3 style="font-size:18px;"><strong><u>Futuros Seminarios en Línea de RRHH</strong></u></h3>
						
						<br />
						
						<table style="width:500px;">
						
							<tr style="border-top:1px solid #548dd4;">
								<td colspan="2">&nbsp;</td>
							</tr>
						
							<tr style="border-top:1px solid #548dd4;">
								
								<td style="width:250px;border-right:1px solid #548dd4;">
									<p>Módulo 1.  ¿Qué busco?
									<br />23 de julio de 2014
									<br />11AM</p>
								</td>
							
								<td style="width:250px;padding-left:5px;">
									<p>Módulo 2. ¿Dónde lo busco?
									<br />06 de agosto de 2014
									<br />11AM</p>
								</td>
						
							</tr>
							
							<tr style="border-top:1px solid #548dd4;border-bottom:1px solid #548dd4;">
								
								<td style="width:250px;border-right:1px solid #548dd4;padding-top:5px;">
									<p>Módulo 3. ¿Cómo evalúo?
									<br />20 de agosto de 2014
									<br />11AM</p>
								</td>
							
								<td style="width:250px;padding-top:5px;padding-left:5px;">
									<p>Módulo 4. ¿Qué herramientas usar?
									<br />3 de septiembre de 2014
									<br />11AM</p>
								</td>
						
							</tr>
							
							<tr style="border-bottom:1px solid #548dd4;">
								<td colspan="2">&nbsp;</td>
							</tr>
						
						</table>
						
						<h3 style="font-size:18px;">Lo que necesitarás</h3>
						
						<ol>
							<li>Una computadora o laptop con conexión a Internet.</li>
							<li>Bocinas o audífonos.</li>
						</ol>
					
					</div>
					
					<div style="width:280px;float:right;border:1px solid black;padding-left:20px;">
					
						<!-- Form -->
						
						<h2>Registro</h2>

						<form role="form" class="g-col-8" style="width:90%;" method="POST" action="/webinar_thanks.php" id="signupForm" enctype="multipart/form-data">
							<input type="hidden" name="series_start" value="2014_07_23" />
							
							<div class="form-group">
								<label for="first_name">Nombre</label>
								<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Nombre" required autofocus="autofocus">
							</div>
							<div class="form-group">
								<label for="last_name">Apellidos (Paterno y Materno)</label>
								<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Apellidos" required>
							</div>
							<div class="form-group">
								<label for="email">Correo electrónico</label>
								<input type="email" id="email" name="email" class="form-control" placeholder="youremail@domain.mx" required>
							</div>
							<div class="form-group">
								<label for="phone">Teléfono</label>
								<input type="tel" id="phone" name="phone" class="form-control" placeholder="Teléfono" required> <!-- Not Auto Validated -->
							</div>
							<div class="form-group">
								<label for="employees">Número de empleados de la empresa</label>
								<input type="text" id="employees" name="employees" class="form-control" placeholder="" required>
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
								<label for="company_name">Posición</label>
								<input type="text" id="person_title" name="person_title" class="form-control" placeholder="Posición" required>
							</div>
							<div class="form-group">
								<label for="company_name">Nombre de empresa</label>
								<input type="text" id="company_name" name="company_name" class="form-control" placeholder="Nombre de empresa" required>
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


				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>










