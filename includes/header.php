<?
$url = "$_SERVER[SERVER_NAME]"; 
$domain = explode(".",$url);
#if(!empty($domain[2])){
#	header("location: http://$url/jobs/");
#}
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<!-- Begin Bootstrap Compatibility -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script>
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		  var msViewportStyle = document.createElement("style")
		  msViewportStyle.appendChild(
		    document.createTextNode(
		      "@-ms-viewport{width:auto!important}"
		    )
		  )
		  document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
		}
	</script>

	<!-- End Bootstrap Compatibility -->


	<meta charset="UTF-8">
	<title><?php echo ((isset($META_TITLE)) ? $META_TITLE : 'Screenie - Interviewing Made Fun' );?></title>
	<?php if ($META_DESCRIPTION){ ?><meta name="description" content="<?php echo $META_DESCRIPTION; ?>"/><?php } ?>

	<!-- removed for IE -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- Reset CSS - Temp - Before Production: Gut Out Essentials -->
    <link rel="stylesheet" href="assets/html5reset.min.css" media="screen">
	<!-- Bootstrap CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- My CSS/JS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="chosen.css" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"> </script>
      <script src="assets/js/respond.min.js"> </script>
    <![endif]-->

	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'> </script>


</head>

<body>
<div class="container">

			<!-- Header -->
			<div class="header-bar inner-center">
				<div>

					<a href="index.php"><img class='logo-link' src='images/logo-screenie.png' /></a>
					<div class="header-nav">
						<ul>
							<li><a href="/available.php">Características</a></li>
							<li><a href="/free-trial.php">Pruébelo gratis</a></li>
							<li><a href="/faq.php">Preguntas frecuentes</a></li>
							<li><a href="/webinars/2/" >Seminarios</a></li>
							<li><a href="http://blog.screenie.com/" target=\"_blank\" >Blog</a></li>
							<li><a class="square-gray-button" href="http://screenie.com/sign-in.php">Inicie su Sesión</a></li>
						</ul>
					</div>

				</div>		
			</div>
			<!-- content-container closes before footer -->
			<div class="content-container">
