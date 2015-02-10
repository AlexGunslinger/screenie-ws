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

					<!-- Image -->
					<div class="g-col-12" id="imageBanner" style="height:350px;width:100%;">
						<img src="http://screenie.mx/images/landing_page.jpg" alt="" style="width:100%; height:100%; border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
					</div>
							
					<div style="width:650px;float:left;">
						
					<h1>¿Que es Screenie?</h1>
			<p>
				Screenie es una plataforma digital que ayuda a las empresas a identificar y contratar al mejor talento de manera eficiente. Esto lo logramos al automatizar las partes ineficientes del proceso de contratación. Hemos ayudado a empresas ahorrar hasta un 80% en el tiempo de contratación de candidatos y un 60% en costos, además de ayudarles a encontrar mejor talento.
			</p> 

			<p>
				Específicamente, Screenie te ayuda a concentrar todos tus solicitantes de múltiples fuentes de trabajo en un sólo lugar. Luego el software personalizable de Screenie califica y evalúa a todos los candidatos de acuerdo a los requerimientos de tu empresa y te presenta a los que mejor cumplen con tus requisitos.  Los candidatos no adecuados se filtran, mientras que los mejores candidatos registran en video sus respuestas a preguntas previamente establecidas para que los conozcas más a fondo. ¡Ahórrate tiempo de revisión de CVs que no cumplan con el perfil requerido!
			</p>

			<p>
				Nuestro software filtra miles de candidatos en cuestión de segundos, permitiendo que enfoques tu tiempo solo en los mejores. ¡Esto hace tu equipo de Recursos Humanos más eficiente, más estratégico y más feliz! 
			</p>

			<h2>¿Por Que Usar Screenie?</h2>
			<p>
				Diversos estudios han encontrado que cerca del 70% de los candidatos que se postulan para una vacante no son adecuados para la posición. Esto significa que tu equipo de Recursos Humanos concentra la mayor parte de su tiempo productivo filtrando y seleccionando candidatos que no añaden valor a tu empresa. 
			</p>
			<p>
				Esto puede ser frustrante y además es una pérdida de tiempo. Screenie permite que tus líderes de RRHH y reclutadores sean efectivos y eficientes al ayudarlos a enfocarse únicamente en el mejor talento que puede ayudar a tu empresa ser más exitosa. 
			</p>
			<p>
				Nuestro software facilita la búsqueda de talento,  automatiza el filtro de CVs y sustituye las llamadas filtro que normalmente consumen la mayor parte del tiempo y costos de reclutadores, permitiendo que puedan revisar y enfocar sus recursos en el mejor talento.
			</p> 
			<p>
				Empresas como Soriana, Lowes y Metalsa utilizan nuestro software para encontrar el mejor talento con ahorros de hasta un 80% en tiempo y en costos a diferencia de otros medios tradicionales. 
			</p>
			<p>
				Hacemos que el Departamento de Recursos Humanos sea el héroe en cualquier organización.
			</p>

					</div>
					
					<div style="width:280px;float:right;">
					
						<!-- Form -->
						<form  style="background-color:#1acad4; margin:10px; margin-right:0px !important; padding:10px; border-radius: 10px; color:white; float:right;" method="POST" action="trial_thanks.php" enctype="multipart/form-data" >
							<h2>Pruébelo gratis</h2>
							<div class="form-group">
								<label for="first_name">Nombre</label>
								<input id="first_name" name="first_name" class="form-control" placeholder="Nombre" required="" autofocus="autofocus" type="text">
							</div>
							<div class="form-group">
								<label for="email">Correo electrónico</label>
								<input id="email" name="email" class="form-control" placeholder="tumail@dominio.mx" required="" type="email">
							</div>
							<div class="form-group">
								<label for="phone">Teléfono</label>
								<input id="phone" name="phone" class="form-control" placeholder="(###) ###-####" required="" type="tel"> <!-- Not Auto Validated -->
							</div>
							<div class="form-group">
								<label for="employees">Número de contrataciones al año</label>
								<input id="employees" name="employees" class="form-control" placeholder="#" required="" type="number">
							</div>
							<div class="form-group">
								<label for="candidate">Candidatos que recibe por puesto</label>
								<input id="candidate" name="candidate" class="form-control" placeholder="#" required="" type="number">
							</div>
							<div class="form-group">
								<label for="company_webpage">Página Web de su empresa</label>
								<input id="company_webpage" name="company_webpage" class="form-control" placeholder="www.empresa.com" required="" type="text">
							</div>
							<div class="form-group">
								<label for="website">¿Cuánto es 3 + 4?</label>
								<input id="simple_math" name="simple_math" class="form-control" placeholder="#" required="" type="number">
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










