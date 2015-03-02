

<?php


	include("citrix.php");
	date_default_timezone_set("America/Monterrey");
	$citrix = new Citrix('gzAWtNEXYm0ezvwFZqKIA93bk6sV8bmg');
	$citrix->set_organizer_key('3925441588578560262'); 
	$citrix->set_access_token('KODYDDNTWaQGR4DABq9I4vphFJwe');

	
	$webinar_id=$_POST['webinar_id']; //multiple select 

	$to=$_POST[email];


	if(!empty($_POST[email]) && ($_POST[simple_math] == 7) && 10==strlen($_POST[phone])) //if valid
	{

		$connectme = "yes";
		include("includes/cons.php");
		include("includes/functions.php");

			//register in webinar
			foreach ( $webinar_id as $webinar => $id) 
		{
			
			//Add user to webinar
			try
			{
				$response = $citrix->citrixonline_create_registrant_of_webinar($id, $data = array('first_name' => $_POST[first_name], 'last_name' => $_POST[last_name], 'email'=>$_POST[email])) ;
				$registration_key= $response['registrantKey'];
				$join_url= $response['joinUrl'];
				$description= $response['description'];
				
			}	
			catch (Exception $e) 
			{	
				//Error in the registration or the webinar doesnt exist
			}


			//insert into participant

			 // fecha webinar

			date_default_timezone_set('America/Monterrey');
                   $today = date('Y-m-d H:i:s');

			//send mails
			if($id == 2305285921240175361)
			{ //reclutamiento y selecion
			$series_start="2015_04_08";
			$webinar_description="MP_G5";
			$subject = "Seminario Certificado de Mejores Prácticas de Reclutamiento y Selección - Screenie";
		
			$message = "$_POST[first_name],
		
			Gracias por registrarte para tomar el Seminario Gratuito en Línea de Certificación de Mejores Prácticas de Reclutamiento y Selección. Tu registro es válido para los siguientes módulos:

			8 de abril de 2015 – Módulo 1. ¿Qué busco?

			22 de abril de 2015 – Módulo 2. ¿Dónde lo busco?

			6 de mayo de 2015 – Módulo 3 – ¿Cómo lo evalúo?

			20 de mayo de 2015 – Módulo 4 – ¿Qué herramientas puedo usar?

			Todos los módulos se llevarán a cabo a las 11am, hora de la Cd. de México.

			Ingresa al seminario en linea en $join_url

			Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx


			Gracias,

			Brenda y el equipo de Screenie

			brenda@screenie.com";

		
		sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);


		}
		
		if($id == 3876110904843731457)
		{ //redes sociales
			
			$series_start="2015_04_15";
			$webinar_description="RS_G3";
			$subject = "Seminario Certificado de Reclutamiento en Redes Sociales - Screenie";
		
			$message = "$_POST[first_name],
		
			Gracias por registrarte para tomar el Seminario Gratuito en Línea de Certificación de de Reclutamiento en Redes Sociales. Tu registro es válido para los siguientes módulos:

			15 de abril de 2015 – Módulo 1. ¿Qué es reclutamiento 2.0?

			29 de abril de 2015 – Módulo 2. Mejores prácticas para el reclutamiento en LinkedIn

			13 de mayo de 2015 – Módulo 3. Mejores prácticas para el reclutamiento en Facebook

			20 de mayo de 2015 – Módulo 4. Mejores prácticas para otras redes y reclutamiento 3.0

			Todos los módulos se llevarán a cabo a las 11am, hora de la Cd. de México.

			Ingresa al seminario en linea en $join_url

			Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx

			Gracias,

			Brenda y el equipo de Screenie";


			sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}

		if($id == 1147514471015794690)
		{ //platica planeacion estrategica
			
			$series_start="2015_03_03";
			$webinar_description="PE_G1";
			$subject = "Platica Planeación Estratégica de RRHH - Screenie";
		
			$message = "$_POST[first_name],
		
			Gracias por registrarte a la Platica Planeación Estratégica de RRHH. Tu registro es válido para el siguiente día:

			Martes 3 de marzo de 2015 
			Horario: 10am

			Ingresa al seminario en linea en $join_url

			Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx

			Gracias,

			Brenda y el equipo de Screenie";


			sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}

			if($id == 4315276739890850817)
		{ //insercion laboral
			
			$series_start="2015_02_27";
			$webinar_description="ID_G1";
			$subject = "Plática: Inserción laboral de las personas con discapacidad - Screenie";
		
			$message = "$_POST[first_name],
		
			Gracias por registrarte a la Plática: Inserción laboral de las personas con discapacidad. Tu registro es válido para el siguiente día:

			Viernes 27 de febrero de 2015 
			
			Horario: 11:30am

			Ingresa al seminario en linea en $join_url

			Te recordamos verificar los requerimientos del sistema para poder participar sin problemas. Y si tienes cualquier duda o requieres más información, puedes visitar la liga: http://bit.ly/1nrQIJx

			Gracias,

			Brenda y el equipo de Screenie";


			sendEmailFrom($to, "brenda@screenie.com", "Brenda Manjarrez", $subject, $message);
		
		}

			mysql_query("INSERT INTO `webinar_signups` (`id`,`series_start`,`name`,`email`,`phone`,`employees`,`hear`,
				`person_title`,`company_name`,`website`,`ip_address`,`dt`,`webinar_id`,`hire_number`,`webinar_description`) 
			VALUES (null,'".$series_start."','$_POST[first_name] $_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[employees]',
				'$_POST[hear]','$_POST[person_title]','$_POST[company_name]','$_POST[website]','" . $_SERVER['REMOTE_ADDR'] ."','".$today."','".$id."','$_POST[hire_number]','".$webinar_description."')");
			
		} //end foreach 
		// end register

	
		//Mail to New User
		$to      = $_POST[email];

		
		//Mail to Screenie
		$to      = 'brenda@screenie.com';
		$subject = "Webinar Signup";
		$message = "Name: $_POST[first_name] $_POST[last_name] \n 
		Email: $_POST[email] \n 
		Phone: $_POST[phone] \n 
		Number of Employees: $_POST[employees] \n 
		Title: $_POST[person_title] \n 
		How did you hear about us? $_POST[hear] \n
		Webinar: ".$webinar_description;

		sendEmailFrom($to, "webinar_signups@screenie.com", "Webinar signups", $subject, $message);

		

			include_once 'includes/header.php';
			$PAGE_TITLE = "Seminarios en Línea Gratuitos";
			
			mysql_close($link);
			
		}
		else{
			
				if($_POST[simple_math] !== 7)
				header("location: webinars.php?wm=1");
				if(10!==strlen($_POST[phone]))
				header("location: webinars.php?wp=1");
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
		