<?
	switch($_POST[request_type]){
		case "demo":
			$page_title = "Thank You for Requesting a Demo";
			$email_subject = "Demo Requested";
		break;
		
		case "trial":
			$page_title = "Thank You for Requesting a Free Trial";
			$email_subject = "Free Trial Requested";
		break;
		
		case "email_subscribe":
			$page_title = "Thank You for subscribing to our Email list.";
			$email_subject = "Email List Subscription";
		break;
		
		default:
			$page_title = "Thanks for your request.";
			//header("location: /");
			//exit;
		break;
	}
	
	if(!empty($_POST[email])){
	
		$connectme = "yes";
		include("includes/cons.php");
		
		mysql_query("INSERT INTO `contact_requests` 
		(`id`,`request_type`,`name`,`email`,`phone`,`employees`,`hear`,`comment`,`dt`) 
		VALUES 
		(null,'$_POST[request_type]','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[employees]','$_POST[hear]','$_POST[comment]',NOW())");
		
		mysql_close($link);
		
		$to      = 'trent@screenie.com, ken@screenie.com';
		$subject = $email_subject;
		$message = "Name: $_POST[name] \n Email: $_POST[email] \n Phone: $_POST[phone] \n Number of Employees: $_POST[employees] \n How did you hear about us? $_POST[hear] \n Comments: $_POST[comment] \n ";
		$headers = 'From: ' . $_POST[email] . "\r\n" .
			'Reply-To: support@screenie.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		
		mail($to, $subject, $message, $headers);
	}
	
	if(!empty($_POST[email_subscribe])){
	
		$connectme = "yes";
		include("includes/cons.php");
		
		mysql_query("INSERT INTO `email_subscribe` 
		(`id`,`email`,`dt`,`ip_address`,`site_page`) 
		VALUES 
		(null,'$_POST[email_subscribe]',NOW(),'" . $_SERVER['REMOTE_ADDR'] . "','" . $_SERVER['HTTP_REFERER'] . "')");
		
		mysql_close($link);
		
		$to      = 'trent@screenie.com, ken@screenie.com';
		$subject = $email_subject;
		$message = "$_POST[email_subscribe] just subscribed to our email list. They were on " . $_SERVER['HTTP_REFERER'] . " when they subscribed. \n ";
		$headers = 'From: ' . $_POST[email_subscribe] . "\r\n" .
			'Reply-To: support@screenie.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		
		mail($to, $subject, $message, $headers);
	
	}
	
?>
<!doctype html>
<head>
  <meta charset="utf-8">
  <title><?=$page_title;?> - Screenie</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="/css/redfront.css?v=3" />
  <script type="text/javascript" src="/js/js.js"></script>
  <link rel="icon" type="image/png" href="/images/icon.gif" />
</head>
<body>
<div id="lbbg">&nbsp;</div>
<div id="lbx" class="lbx" onClick="hideDisplay();"></div>
<div id="lb" class="lb"></div>
	<div id="wrapper">
		<header>
			<? include("includes/header.php"); ?>
		</header>
		<div id="middle_vanilla">
			<div id="mc">
				
				<div id="vanilla">
					<h1><?=$page_title;?></h1>
					<br style="clear:both;" />
					<p>We'll be in contact within 24 hours. </p>
					<br style="clear:both;" />
					<h2>Main Contact</h2>
					<br />
					<p>Phone: 855-782-HIRE <br />Email: info at screenie dot com</p>
					
					<h2>Mailing</h2>
					<br />
					<p>Address: 67 N. Center Street, American Fork, UT </p>
					<br style="clear:both;" />
					<br style="clear:both;" />
					
				</div>
				<br style="clear:both;" />
				<br style="clear:both;" /><br style="clear:both;" /><br style="clear:both;" /><br style="clear:both;" />
				<br style="clear:both;" /><br style="clear:both;" /><br style="clear:both;" /><br style="clear:both;" />
				
			</div>
		</div>

		<footer>
			<div id="footer">
				<div id="footer_links">
					<? include("includes/footer.php"); ?>
				</div>
			</div>
		</footer>
	</div>
<div id="void"></div>
<? include("includes/analytics.php"); ?>
</body>
</html>