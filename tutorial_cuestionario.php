
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
					
					<h1>Tutorial: Cuestionario</h1>
					<p>Esta sección te ayudará a crear un cuestionario con preguntas filtro que se ajusten a las necesidades y los requerimientos de tus vacantes.</p>

					
					<h3>Cómo crear un cuestionario con preguntas filtro</h3>
					<p>Conoce las distintas preguntas filtro que Screenie te ofrece.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_16.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo modificar preguntas en el cuestionario</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_17.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo cambiar el orden de las preguntas</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_18.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					

					<br><br>
					<h3>Cómo revisar las respuestas de un cuestionario</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_29.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>


					<br><br>
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













