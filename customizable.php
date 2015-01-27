<?php
$META_TITLE = 'A la medida';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "A la medida";
?>
<?php
	// Define "Feature" Attributes here. 
	$feature = array(
		"title" => "Entrevistas personalizables",
		"tagline" => "Entrevistas a su gusto",
		"bullets" => array(
			'Cree las preguntas que desee para cada entrevista o elíjalas desde nuestro banco de preguntas.',
			'Elija un periodo de vigencia para las entrevistas y elija el tiempo de respuesta para cada pregunta (opcional).',
			'Guarde las preguntas de entrevista en “grupos” o “vacantes”; así sólo tiene que crear una serie de preguntas para cada vacante una sola vez.'
			),
		"image" => "features-icon-mobile.png"
	);
?>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1><?php echo $PAGE_TITLE; ?></h1>
					
					<?php 
					// Features Navigation on Left Hand Side
					include_once 'includes/features-nav.php'; ?>

					<div class="feature" style="padding-left:50px;">
						<div class="feature-image">	
							<?php echo "<img src=\"images/".$feature["image"]."\" />"; ?>
						</div>
						
						<div class="feature-info">
							<h2 style="font-size:24px;"><?php echo $feature["title"]; ?></h2>
							<h3><?php echo $feature["tagline"]; ?></h3>
							<ul>
								<?php foreach ($feature["bullets"] as $bullet) {
									echo "<li>".$bullet."</li>";
								} ?>
							</ul>
						</div>

					</div>				

				</div>
			</div> <!-- </section> -->

			<!-- Teal Section CTA (Customize per Feature Page) -->
			<div class="inner-center section section-teal">
				<div>
					<h2 style="font-size:30px;">Screenie optimizará su proceso de reclutamiento y selección de personal</h2>
						
						<div class="cta-vid-container g-col-6">
							<a href="http://www.youtube.com/embed/gZgHaT0cgSk?rel=0&amp;wmode=transparent" class="youtube-popout">
								<img src="images/mac-computer-only.png" image-name="mac-computer" alt="">			
								<img src="images/play-button-green.png" class="vid-play-button image-hoverable" image-resting="images/play-button-green.png" image-hover="images/play-button-teal.png" alt="Play Video">
							</a>
						</div>
  
  					<div class="g-col-5 pull-right">

						<h3>Optimize su proceso de contratación de personal y empiece a ver resultados</h3>
						<p>Contacte a un representante de Screenie para iniciar su periodo de prueba hoy mismo. Llena nuestro sencillo formulario y nos pondremos en contacto con usted.</p>

						<div class="widget-cta-green-btn margin-auto">
							<a href="free-trial.php" title="Try it Free for 30 Days" class="btn">
								Prueba Gratuita de 30 días
								<span class="cta-subtitle">No se requiere tarjeta de crédito</span>
							</a>
							<p>¡Prueba Screenie, sin compromiso!</p>
						</div>
  					</div>

				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>