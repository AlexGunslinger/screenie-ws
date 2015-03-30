
<?php
session_start();

include_once 'includes/header.php';
$PAGE_TITLE = "tutorial";
?>

  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
    .chosen-container{width:100% !important; }
  </style>


<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>
					
					<div style="width:650px;float:left;"> <!--tutorial-->

						<h1>Tutorial: Índice</h1>
						
						<br>
						
						<h4>Plataforma</h4>
						<ul>
							 <li><a href="tutorial_index.php">¿Cómo entrar a la plataforma?</a></li>
							 <li><a href="tutorial_index.php">¿Cómo cambiar el idioma predeterminado de la plataforma?</a></li>
						</ul>

						<h4>Vacantes</h4>
						<ul>
							 <li><a href="tutorial_vacante.php">Cómo desactivar-archivar una vacante</a></li>
							 <li><a href="tutorial_vacante.php">Modificación en una Publicación</a></li>
							 <li><a href="tutorial_vacante.php">Cómo publicar una vacante</a></li>
							 <li><a href="tutorial_vacante.php">Cómo hacer una vacante confidencial</a></li>
							 <li><a href="tutorial_vacante.php">Conoce dónde se publica tu vacante</a></li>
							 <li><a href="tutorial_vacante.php">Cómo generar un reporte de una vacante</a></li>
							 <li><a href="tutorial_vacante.php">Dar de alta una nueva posición</a></li>
						</ul>

						<h4>Candidato</h4>
						<ul>
							<li><a href="tutorial_candidato.php">Dar de alta una nueva posición</a></li>
							 <li><a href="tutorial_candidato.php">Cómo descargar y visualizar el CV de un candidato</a></li>
							 <li><a href="tutorial_candidato.php">Cómo pedir a un candidato que suba su CV</a></li>
							 <li><a href="tutorial_candidato.php">Cómo publicar una vacante</a></li>
							 <li><a href="tutorial_candidato.php">Cómo hacer una vacante confidencial</a></li>
							 <li><a href="tutorial_candidato.php">Conoce dónde se publica tu vacante</a></li>
							 <li><a href="tutorial_candidato.php">Cómo generar un reporte de una vacante</a></li>
							 
						</ul>

						<h4>Candidatos descartados</h4>
						<ul>
							 <li><a href="tutorial_candidatodes.php">Información de candidatos descartados</a></li>
							 <li><a href="tutorial_candidatodes.php">Cómo saber por qué fue descartado un candidato</a></li>
						</ul>

						<h4>Cuestionario</h4>
						<ul>
							 <li><a href="tutorial_cuestionario.php">Cómo crear un cuestionario con preguntas filtro</a></li>
							 <li><a href="tutorial_cuestionario.php">Cómo modificar preguntas en el cuestionario</a></li>
							 <li><a href="tutorial_cuestionario.php">Cómo cambiar el orden de las preguntas</a></li>
							 <li><a href="tutorial_cuestionario.php">Cómo revisar las respuestas de un cuestionario</a></li>
						</ul>

						<h4>Ajustes</h4>
						<ul>
							 <li><a href="tutorial_ajustes.php">Cómo crear una nueva unidad de negocio</a></li>
							 <li><a href="tutorial_ajustes.php">Modifica tus unidades de negocio</a></li>
							 <li><a href="tutorial_ajustes.php">Cómo crear un estatus nuevo</a></li>
							 <li><a href="tutorial_ajustes.php">Cómo modificar un estatus</a></li>
							 <li><a href="tutorial_ajustes.php">Crear plantillas de correo electrónico</a></li>
							 <li><a href="tutorial_ajustes.php">Cómo ligar una plantilla a un estatus</a></li>
							 <li><a href="tutorial_ajustes.php">Cómo configurar las notificaciones por correo</a></li>
						</ul>

						<h4>Mejores prácticas</h4>
						<ul>
							 <li><a href="tutorial_tips.php">Cómo crear publicaciones efectivas</a></li>
							 <li><a href="tutorial_tips.php">Cómo utilizar Screenie para el Reclutamiento Activo</a></li>
							 <li><a href="tutorial_tips.php">Cómo usar mi Página de Vacantes</a></li>
						</ul>
						<h5>¿Sigues teniendo dudas? Env&iacute;anos un correo a soporte@screenie.com</h5>


					</div>
					
					<style>
						li
						{
							font-size: 15px;
						}
						#tutorial
						{
							font-size: 20px;
						}

					</style>
					
					<div style="width:280px;float:right;border:1px solid black;padding-left:20px;">
						</br>
						<label id="tutorial">Tutorial</label>
					</br></br>
						<ul>
						  <li><a href="tutorial.php">Plataforma</a></li>
						  <li><a href="tutorial_vacante.php">Vacantes</a></li>
						  <li><a href="tutorial_candidato.php">Candidato</a></li>
						  <li><a href="tutorial_candidatodes.php">Candidatos descartados</a></li>
						  <li><a href="tutorial_cuestionario.php">Cuestionario</a></li>
						  <li><a href="tutorial_ajustes.php">Ajustes</a></li>
						  <li><a href="tutorial_tips.php">Mejores prácticas</a></li> 
						  <li><a href="tutorial_index.php">Índice</a></li> 

						</ul>
						</br></br>
					</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>













