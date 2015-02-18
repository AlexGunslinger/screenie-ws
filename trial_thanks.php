<?
switch($_POST[request_type]){
case "trial":
$page_title = "You're setup";
$email_subject = "Free Trial Requested";
break;
default:
$page_title = "Thanks for your request.";
//header("location: /");
//exit;
break;
}
if(!empty($_POST[email]) && ($_POST[simple_math] == 7)){
$connectme = "yes";
include("includes/cons.php");
include("includes/functions.php");
mysql_query("INSERT INTO `free_trials`
(`id`,`request_type`,`name`,`email`,`phone`,`employees`,`hear`,are_you_a_candidate,`company_name`,`website`,`ip_address`,`dt`)
VALUES
(null,'$_POST[request_type]','$_POST[first_name] $_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[employees]','$_POST[hear]','$_POST[are_you_a_candidate]','$_POST[company_name]','$_POST[website]','" . $_SERVER['REMOTE_ADDR'] . "',NOW())");
mysql_close($link);
if($_POST[are_you_a_candidate] == 2){
$are_you_a_candidate = "No";
}else{
$are_you_a_candidate = "Yes";
}
//Mail to Screenie
$to = 'trent@screenie.com, perla@screenie.com';
$subject = "Free Trial Request Mexico";
$message = "Name: $_POST[first_name] $_POST[last_name] \n
Email: $_POST[email] \n
Phone: $_POST[phone] \n
Number of Employees: $_POST[employees] \n
How did you hear about us? $_POST[hear] \n
Website: $_POST[website] \n
Are you a candidate: $are_you_a_candidate \n";
$headers = 'From: ' . $_POST[email] . "\r\n" .
'Reply-To: support@screenie.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
//Mail to New User
$to = $_POST[email];
$subject = "Welcome to Screenie";
$message = "Hola $_POST[first_name],
¡Bienvenido a Screenie!
Un ejecutivo se pondrá en contacto contigo brevemente para proceder en la creación de tu cuenta.
Contáctanos si tienes alguna pregunta sobre la plataforma.
¡Gracias!
El Equipo Screenie MX
soporte@screenie.com";
$headers = "From: soporte@screenie.com \r\n" .
'Reply-To: soporte@screenie.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
$trial_thanks_set = 1;
$META_TITLE = 'Programe su periodo de prueba';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Programe su periodo de prueba";
}else{
header("location: free-trial.php");
exit;
}
?>
<!-- Section -->
<div class="inner-center section">
<div>
<h1>Hemos enviado un correo de confirmación a <?=$_POST[email];?></h1>
<h2>¡Revisa tu correo y nos pondremos en contacto!</h2>
</div>
</div> <!-- </section> -->
<?php
include_once 'includes/footer.php';
