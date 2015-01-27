<!-- - - - - TEMPLATE Begin Template [footer] -->
			</div> <!-- .content-container -->
<!-- Footer -->	
			<div class="bottom-bar inner-center">
				<div>
						<a href="index.php"><img class='logo-link' src='images/logo-screenie.png' /></a>
						<nav class="footer-nav">
							<ul>
								<li><a href="available.php">Características</a></li>
								<li><a href="faq.php">Preguntas frecuentes</a></li>
								<li><a href="free-trial.php">Pruébelo gratis</a></li>
							</ul>
						</nav>
						<div class="footer-social-icons">
							<a href="https://twitter.com/ScreenieMx" target="_blank"><img src="images/social-icon-twitter.png" alt="" height="44" width="44"></a>
							<a href="https://www.facebook.com/ScreenieInc" target="_blank"><img src="images/social-icon-facebook.png" alt="" height="44" width="44"></a>
							<a href="https://www.linkedin.com/company/screenie" target="_blank"><img src="images/social-icon-linked-in.png" alt="" height="44" width="44"></a>
						</div>

				</div>
			</div>

			<div class="footer-features inner-center">				
				<div>
					<h3 class="pull-left">Características</h3>
					<div class="footer-nav pull-left">
						
						<ul>
							<li><a href="available.php" style="font-size:9px;">Disponible a cualquier hora, en cualquier lugar</a></li>
							<li><a href="branded.php" style="font-size:8px;">Portales de entrevistas personalizables con tu marca</a></li>
							<li><a href="customizable.php" style="font-size:9px;">Entrevistas personalizables</a></li>
							<li><a href="data.php" style="font-size:9px;">Gestión de datos y almacenamiento</a></li>
							<li><a href="sharable.php" style="font-size:9px;">Comparte entrevistas y perfiles de candidatos</a></li>
						</ul>

					</div>

					<div class="footer-subscribe">
						<h3 style="font-size:12px;">Suscríbase para recibir noticias y actualizaciones.</h3>
						<form class="form-inline" role="form" id="footer-subscription-form">
							<div class="form-group">
								<label class="sr-only" for="subscriber_email">Email address</label>
								<input type="email" class="form-control" id="subscriber_email" placeholder="correo@domain.com" style="font-size:12px;">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default" style="font-size:14px;">¡Suscribirme!</button>
							</div>
						</form>
					</div>
				

				</div>
			</div>







			<div class='footer-text-div inner-center'>
				<div>
					<p style="font-size:14px;">Screenie es una marca de Screenie, Inc. &copy; <?=date("Y");?> Screenie, Inc. Todos los derechos reservados | <a href="terms_mx.php">Términos de Servicio</a> | <a href="privacy_mx.php">Política de Privacidad</a> | <a href="contact-us.php">Contáctanos</a></p>
				</div>
			</div>

    
	<!-- Other jQuery and Required 'before Body' includeds -->
    <script type='text/javascript' src="assets/bootstrap.min.js"> </script>
    <!-- For Color Box -->
    <script src="assets/jquery.colorbox-min.js"> </script>
    <link rel="stylesheet" href="assets/colorbox.css" media="screen">
    
    <script type='text/javascript' src='script.js'> </script>   

    <script>
    	UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/NxpiRorNiqiNg0OwiVEXnQ.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();
			UserVoice.push(['set', {
			    accent_color: '#448dd6',
				trigger_color: 'white',
				trigger_background_color: 'rgba(46, 49, 51, 0.6)'
				}]);

			UserVoice.push(['identify', {
			    }]);

			UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);

			UserVoice.push(['autoprompt', {}]);
		</script>

</div> <!-- .container -->
<? include("analytics.php"); ?>
<?

	if($trial_thanks_set == 1){
	
		include("analytics_adwords.php");
	
	}
	
?>
</body>
</html>
<!-- - - - - TEMPLATE End Template [footer] -->