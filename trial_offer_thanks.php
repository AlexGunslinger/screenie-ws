<?php
	
	
	if(!empty($_POST[email]) && ($_POST[simple_math] == 7)){
		
		$connectme = "yes";
		include("includes/functions.php");

		$first_name = $_POST['first_name']; // required
    	$email_from = $_POST['email']; // required
    	$phone = $_POST['phone'];
   	 	$employees = $_POST['employees'];
    	$website = $_POST['company_webpage'];
   		$candidate = $_POST['candidate'];

		
		//Send mail to the person in the form
			$subject = "Gracias por solicitar su periodo de prueba en Screenie";
		
			$message = "$_POST[first_name],

			Gracias por solicitar su periodo de prueba gratis con Screenie.

   			Estamos entusiasmados por saber más sobre las necesidades y metas de contratación de su empresa. En breve, uno de nuestros representantes se pondrá en contacto con usted por teléfono para empezar su periodo de prueba.
    
    		¡Le deseamos excelente día y esperamos hablar pronto!";

			sendEmailFrom($email_from, "trialscreenie@noreplay.com", "Screenie", $subject, $message);


		//Mail to Screenie	
			$to      = 'ken@screenie.com';
			$subject = "Someone has requested a free trial from the PPC landing page.";
			$email_message .= "Here's the information:\n\n";
	    
	    	$email_message .= "Name: ".$first_name."\n\t";
	 
	    	$email_message .= "Email: ".$email_from."\n";
	 
	    	$email_message .= "Telephone: ".$phone."\n";

	    	$email_message .= "Company web page: ".$website."\n";

	    	$email_message .= "Number of jobs you hire each year: ".$employees."\n";

	    	$email_message .= "Approximate number of candidates per position: ".$candidate."\n";

			sendEmailFrom($to, "trialscreenie@noreplay.com", "Screenie", $subject, $email_message);

			//$META_TITLE = 'Programe su periodo de prueba';
			include_once 'includes/header.php';
			$PAGE_TITLE = "Programe su periodo de prueba";
			
		

		}
		else
		{
		
			header("location: landing_page.php");
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

<!-- Google Code for Sebo PPC Spanish Demo Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 961666596;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "oyT2CI_Bq1YQpLzHygM";
	var google_remarketing_only = false;
	/* ]]> */
</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>

<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/961666596/?label=oyT2CI_Bq1YQpLzHygM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>
<!-- </google code> -->


<?php
include_once 'includes/footer.php';
?>