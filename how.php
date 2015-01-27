<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Screenie</title>
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
		<div id="middle_how">
			<div id="mc">
				
				<div id="home_how">
					<div id="how_top"><img src="/images/laptop.gif" alt="laptop" /><br />Login & create the position you would like to hire for.</div>
					<div id="how_left"><img src="/images/handshake.gif" alt="handshake" /><br />Make an educated, collaborated hiring decision.</div>
					<div id="how_right"><img src="/images/question.gif" alt="question" /><br />Create interview questions.  Make your own or use our question bank.</div>
					<div id="how_bottom_left"><img src="/images/three_small_circles.gif" alt="envelope" /><br />View, rate and share interview and candidate information.</div>
					<div id="how_bottom_right"><img src="/images/envelope.gif" alt="envelope" /><br />Publish your invite. Candidates will be sent a unique code to complete the interview.</div>
				</div>
				<br style="clear:both;" />
				
				<div id="home_demo" onclick="javascript:window.parent.location='/demo.php';">
					<img src="/images/right_arrow_circle.png" alt="right_arrow" /> &nbsp;&nbsp;&nbsp;&nbsp; <div style="display:inline;top:5px;position:relative;">Schedule a demo</div>
				</div>
				
				<div id="home_trial" onclick="javascript:window.parent.location='/trial.php';">
					<img src="/images/right_arrow_circle.png" alt="right_arrow" /> &nbsp;&nbsp;&nbsp;&nbsp; <div style="display:inline;top:5px;position:relative;">Start a free trial</div>
				</div>
				<br style="clear:both;" />
				
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