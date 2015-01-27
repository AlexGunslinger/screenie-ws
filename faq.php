<?php
$META_TITLE = 'Preguntas Frecuentes';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Preguntas Frecuentes";
?>

<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1><?php echo $PAGE_TITLE; ?></h1>
					<h2>Preguntas frecuentes y respuestas</h2>
					
					<?php 
					$q_and_a_list = array(
					array(
						"¿Qué pasa si un candidato no tiene una cámara Web?",
						"No hay problema. Los aspirantes pueden realizar la entrevista desde una computadora, tableta, cualquier dispositivo móvil inteligente o teléfono fijo. Si un candidato no tiene una cámara Web en su computadora, puede utilizar la cámara de su teléfono celular o tableta."
						),
					array(
						"¿Cuáles navegadores son compatibles con Screenie?",
						"Todos son compatibles. Screenie funciona en todos los navegadores de internet, incluyendo Internet Explorer, Firefox, Chrome y Safari. No requiere descargar plugins o software adicional. Screenie también funciona en todos los dispositivos móviles y tabletas."
						),
					array(
						"¿Qué software/hardware se requiere para usar Screenie?",
						"Ninguno. Lo único que requiere para usar Screenie es una computadora o un dispositivo móvil inteligente con acceso a Internet. Puede entrar y usar todo lo de nuestra página Web, no requiere descargar algo adicional."
						),
					array(
						"¿En qué se diferencia Screenie de otros programas de entrevistas digitales/de video y de selección?",
						"Screenie ofrece un producto de entrevistas digitales y de filtro de clase mundial al precio más accesible en el mercado. Tanto nuestros dueños como nuestros empleados han vendido y ofrecido software para Recursos Humanos en la última década. Entendemos sus necesidades y ofrecemos el mejor servicio al cliente en la industria. ¡Compruébelo iniciando su periodo de prueba hoy mismo!"
						),
					array(
						"¿Cómo funciona el periodo de prueba de Screenie?",
						"Es sencillo. Recabamos su información e instalamos su portal de entrevistas digitales para que pueda probar el sistema. Si le interesa contratar el servicio, éste continúa de manera normal. Si no le interesa continuar, sencillamente cancele."
						)
					);
					?>

					<div class="panel-group faq-wrapper" id="accordion">
						<?php 
						$curIndex = 1; // Start on 1
						foreach ($q_and_a_list as $q_and_a_item) {
							$curQuestion = $q_and_a_item[0];
							$curAnswer   = $q_and_a_item[1];
							$curTarget   = "collapse_".$curIndex;
						?>
							<div class="panel panel-default"> <!-- Start Individual Panel -->
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href='<?php echo "#".$curTarget?>'>Q: <?php echo $curQuestion; ?></a>
							      </h4>
							    </div>
						        
						    <div id="<?php echo $curTarget; ?>" class="panel-collapse collapse">
						      <div class="panel-body">
						      	<strong>A: </strong>
						        <?php echo $curAnswer; ?>
						      </div>
						    </div>
						  </div> <!-- End Panel -->
					  	<?php 
					  	$curIndex++;
					  	}; 
					  	?>

					  	<script type='text/javascript'>
					  		// Toggled 1st Element open

					  			window.setTimeout( function(){
					  				$('.collapse').collapse();
					  			},
					  			500);
					  	</script>
					</div>


				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>