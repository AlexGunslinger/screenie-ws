
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
					<h1>Tutorial: Ajustes</h1>
					<p>Conoce cómo personalizar la plataforma de acuerdo a las necesidades de tu empresa.</p>
					<br>
					
					<h3>Cómo crear una nueva unidad de negocio</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_8.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Modifica tus unidades de negocio</h3>
	
					<video width="600" controls>
  					<source src="tutorial/tutorial_9.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo crear un estatus nuevo</h3>
					<p>Clasifica y organiza tus candidatos con los estatus.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_10.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo modificar un estatus</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_11.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Crear plantillas de correo electrónico</h3>
					<p>No envíes correos uno por uno. Utiliza las plantillas de correo electrónico para enviar información <br>a tus candidatos.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_12.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo ligar una plantilla a un estatus</h3>
					<p>Automatiza el envío de correos a tus candidatos con esta función.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_13.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					<br><br>
					<h3>Cómo configurar las notificaciones por correo</h3>
					<p>Conoce las distintas notificaciones que te ofrece la plataforma y cómo activarlas.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_14.mp4" type="video/mp4">
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













