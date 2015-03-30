
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
						<h1>Tutorial: Vacantes</h1>
					<p>En esta sección aprenderás a crear una vacante, capturar su información y publicarla en bolsas de trabajo y en tu Página de Vacantes. Además, cómo crear una vacante confidencial y generar reportes.</p>
					<br>
						
					</br>

					<h3>Dar de alta una nueva posición</h3>
					
					<video width="600" controls>
  					<source src="tutorial/tutorial_15.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>
					
					<br><br>

					<h3>Cómo desactivar-archivar una vacante</h3>
						<p>En este tutorial aprenderás la diferencia entre una vacante activa, una archivada y una publicada.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_19.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					</br></br>
					<h3>Cómo modificar una publicación</h3>
						<p>¿Publicaste una vacante pero requieres hacer un cambio? Aquí te decimos cómo.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_20.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					</br></br>
					<h3>Cómo publicar una vacante</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_21.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					</br></br>
					<h3>Cómo hacer una vacante confidencial</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_23.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>


					</br></br>
					<h3>Conoce dónde se publica tu vacante</h3>
						<p>Conoce en cuáles bolsas de trabajo y otros medios se ha publicado tu vacante.</p>
					<video width="600" controls>
  					<source src="tutorial/tutorial_26.mp4" type="video/mp4">
  					Tu navegador no soporta videos HTML5.
					</video>

					</br></br>
					<h3>Cómo generar un reporte de una vacante</h3>
					<video width="600" controls>
  					<source src="tutorial/tutorial_27.mp4" type="video/mp4">
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













