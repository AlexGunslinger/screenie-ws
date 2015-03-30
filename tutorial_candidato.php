
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

					<h1>Tutorial: Candidato</h1>
					<p>Esta sección te mostrará las distintas maneras que existen para ver la información de los candidatos que se postulan para tus vacantes, cómo organizarlos y gestionar su información. </p>
					
					<h3>Cómo descargar y visualizar el CV de un candidato</h3>
					
					<video width="600" controls>
  					<source src="tutorial/tutorial_30.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo pedir a un candidato que suba su CV</h3>
					<p>Si te interesa un candidato mas no subió su CV, esta es la manera de invitarlo a que lo haga.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_31.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo calificar y cambiar de estatus a los candidatos</h3>
					<p>Organiza a los candidatos que has revisado.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_32.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo compartir la información de los candidatos</h3>
					<p>¿Trabajas en equipo o tu cliente interno requiere la información de un candidato? Aquí te decimos cómo compartirla.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_33.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo ver el historial de postulaciones de un candidato</h3>
					<p>Conoce si un candidato se ha postulado para otras vacantes dentro de tu empresa.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_34.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo agregar anotaciones sobre un candidato</h3>
					<p>Organiza todas tus anotaciones y las de tu equipo, en un solo lugar.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_35.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Consulta la calificación de un candidato</h3>
			
					<video width="600" controls>
  					<source src="tutorial/tutorial_38.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo invitar a un candidato a postularse</h3>
					
					<video width="600" controls>
  					<source src="tutorial/tutorial_40.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					

				</br></br>
					<label>¿No es lo que buscas? Utiliza nuestro </label> <a href="tutorial_index.php">índice</a>.
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
						  <li><a href="tutorial_index.php">Indice</a></li> 

						</ul>
						</br></br>
					</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>













