<?
	header("location: contact.php");
	exit;
?>
<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Support - Screenie</title>
  <meta name="description" content="" />
  <link rel="stylesheet" href="/css/redfront.css?v=3" />
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
					<h1>SUPPORT</h1>
					<h2>Contact</h2>
					<br />
					<p>Phone: 855-782-HIRE <br />Email: support at screenie dot com</p>
				</div>
				<br style="clear:both;" />
				
				<div id="home_demo" onclick="javascript:window.parent.location='/demo.php';">
					<img src="/images/right_arrow_circle.png" alt="right_arrow" /> &nbsp;&nbsp;&nbsp;&nbsp; <div style="display:inline;top:5px;position:relative;">Schedule a demo</div>
				</div>
				
				<div id="home_trial" onclick="javascript:window.parent.location='/trial.php';">
					<img src="/images/right_arrow_circle.png" alt="right_arrow" /> &nbsp;&nbsp;&nbsp;&nbsp; <div style="display:inline;top:5px;position:relative;">Start a free trial</div>
				</div>
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