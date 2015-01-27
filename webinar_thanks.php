<?
	
	if(!empty($_POST[email]) && ($_POST[simple_math] == 7)){
	
		$connectme = "yes";
		include("includes/cons.php");
		include("includes/functions.php");
	
		//Mail to New User
		$to      = $_POST[email];
		
		if($_POST[recruitment] == "1"){
		
			mysql_query("INSERT INTO `webinar_signups` 
			(`id`,`request_type`,series_start,`name`,`email`,`phone`,`employees`,`hear`,`person_title`,`company_name`,`website`,`ip_address`,`dt`) 
			VALUES 
			(null,'$_POST[request_type]','2014_11_05','$_POST[first_name] $_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[employees]','$_POST[hear]','$_POST[person_title]','$_POST[company_name]','$_POST[website]','" . $_SERVER['REMOTE_ADDR'] . "',NOW())");
	
		
			$subject = "Seminario Certificado de Mejores Prácticas de Reclutamiento y Selección - Screenie";
		
			$message = "$_POST[first_name],
		
Gracias por registrarte para tomar el Seminario Gratuito en Línea de Certificación de Mejores Prácticas de Reclutamiento y Selección. Tu registro es válido para los siguientes módulos:

4 de febrero de 2015 – Módulo 1. ¿Qué busco?

18 de febrero de 2015 – Módulo 2. ¿Dónde lo busco?

4 de marzo de 2015 – Módulo 3 – ¿Cómo lo evalúo?

18 de marzo de 2015 – Módulo 4 – ¿Qué herramientas puedo usar?

Todos los módulos se llevarán a cabo a las 11am, hora de la Cd. de México.

Para poder ingresar al Seminario en Línea, requieres una liga única y personal. Obténla en:

https://attendee.gotowebinar.com/register/2338912283539017217

Webinar ID: 138-869-587

Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx




Gracias,

Brenda y el equipo de Screenie

brenda@screenie.com";

		$recruitment_response = "Yes";

		sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}else{
		
			$recruitment_response= "No";
		
		}
		
		if($_POST[social] == "1"){
		
			mysql_query("INSERT INTO `webinar_signups` 
			(`id`,`request_type`,series_start,`name`,`email`,`phone`,`employees`,`hear`,`person_title`,`company_name`,`website`,`ip_address`,`dt`) 
			VALUES 
			(null,'$_POST[request_type]','2014_10_29','$_POST[first_name] $_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[employees]','$_POST[hear]','$_POST[person_title]','$_POST[company_name]','$_POST[website]','" . $_SERVER['REMOTE_ADDR'] . "',NOW())");
			
			$subject = "Seminario Certificado de Reclutamiento en Redes Sociales - Screenie";
		
			$message = "$_POST[first_name],
		
Gracias por registrarte para tomar el Seminario Gratuito en Línea de Certificación de de Reclutamiento en Redes Sociales. Tu registro es válido para los siguientes módulos:

11 de febrero de 2015 – Módulo 1. ¿Qué es reclutamiento 2.0?

25 de febrero de 2015 – Módulo 2. Mejores prácticas para el reclutamiento en LinkedIn

11 de marzo de 2015 – Módulo 3. Mejores prácticas para el reclutamiento en Facebook

25 de marzo de 2015 – Módulo 4. Mejores prácticas para otras redes y reclutamiento 3.0

Todos los módulos se llevarán a cabo a las 11am, hora de la Cd. de México.

Para poder ingresar al Seminario en Línea, requieres una liga única y personal. Obténla en:

https://attendee.gotowebinar.com/register/6303047525857154306

Webinar ID: 159-920-691

Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx




Gracias,

Brenda y el equipo de Screenie";

			$social_response= "Yes";

			sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}else{
		
			$social_response= "No";
		
		}

		if($_POST[rrhh] == "1"){
		
			mysql_query("INSERT INTO `webinar_signups` 
			(`id`,`request_type`,series_start,`name`,`email`,`phone`,`employees`,`hear`,`person_title`,`company_name`,`website`,`ip_address`,`dt`) 
			VALUES 
			(null,'$_POST[request_type]','2015_02_06','$_POST[first_name] $_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[employees]','$_POST[hear]','$_POST[person_title]','$_POST[company_name]','$_POST[website]','" . $_SERVER['REMOTE_ADDR'] . "',NOW())");
			
			$subject = "Plática: Los retos de RRHH en los siguientes años - Screenie";
		
			$message = "$_POST[first_name],
		
Gracias por registrarte para la plática 'Los retos de RRHH en los siguientes años.

La plática se llevara a cabo el 6 de febrero del 2015 a las 10am, hora de la Cd. de México.

Para poder ingresar al Seminario en Línea, requieres una liga única y personal. Obténla en:

https://attendee.gotowebinar.com/register/3857612720791850497

Webinar ID: 121-147-107

Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx




Gracias,

Brenda y el equipo de Screenie";

			$rrhh_response= "Yes";

			sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}else{
		
			$rrhh_response= "No";
		
		}

		//Mail to Screenie
		$to      = 'brenda@screenie.com';
		$subject = "Webinar Signup";
		$message = "Name: $_POST[first_name] $_POST[last_name] \n 
Email: $_POST[email] \n 
Phone: $_POST[phone] \n 
Number of Employees: $_POST[employees] \n 
Title: $_POST[person_title] \n 
How did you hear about us? $_POST[hear] \n 
Certificado de Mejores Prácticas de Reclutamiento y Selección: $recruitment_response \n
Certificado de Reclutamiento en Redes Sociales: $social_response \n
Plática: Los retos de RRHH en los siguientes años: $rrhh_response \n";

		$headers = 'From: Screenie <' . $_POST[email] . ">\r\n" .
			'Reply-To: brenda@screenie.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	
		mail($to, $subject, $message, $headers);
		
		
			$META_TITLE = 'Seminarios en Línea Gratuitos';
			include_once 'includes/header.php';
			$PAGE_TITLE = "Seminarios en Línea Gratuitos";
			
			mysql_close($link);
			
		}else{
		
			header("location: webinars.php");
			exit;
		
		}

?>
<!-- Section -->
			<div class="inner-center section">
				<div>
					
					<h1><?=$PAGE_TITLE;?></h1>
					<h2>Hemos enviado un correo de confirmación a (<?=$_POST[email];?>).  Revisa tu correo electrónico, incluyendo la carpeta de SPAM, para seguir en contacto.</h2>
					
					
					</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>