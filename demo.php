<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Schedule a Demo - Screenie</title>
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
					<h1>Schedule a Demo</h1>
					<form method="POST" action="/request_thanks.php" id="signupForm" onsubmit="return formValidate(this.id);">
					<input type="hidden" name="request_type" value="demo" />
					<table style="margin-top:10px;width:100%;text-align:left;">
					<tr>
						<td style="text-align:right;width:180px;">Name:</td>
						<td><input type="text" name="name" id="name" class="is_required" value="<?=$users[first_name]?>" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Email:</td>
						<td><input type="text" name="email" id="email" class="is_required" value="<?=$users[email]?>" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Phone:</td>
						<td><input type="text" name="phone" id="phone" class="is_required" value="<?=$users[phone]?>" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Number of Employees:</td>
						<td>
							<select name="employees" class="is_required">
							<option value="">Select one...</option>
							<option value="Less than 20">Less than 20</option>
							<option value="21-50">21-50</option>
							<option value="51-100">51-100</option>
							<option value="101-250">101-250</option>
							<option value="251-500">251-500</option>
							<option value="501-1000">501-1000</option>
							<option value="1001-1500">1001-1500</option>
							<option value="1501-2000">1501-2000</option>
							<option value="2001+">2001+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align:right;">How did you hear about us?</td>
						<td>
							<select name="hear" class="is_required">
							<option value="">Select one...</option>
							<option value="Search Engine">Search Engine</option>
							<option value="Client Referral">Client Referral</option>
							<option value="Seminar or Event">Seminar or Event</option>
							<option value="Webinar">Webinar</option>
							<option value="Other">Other</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align:right;">Comment/Question:</td>
						<td><textarea name="comment" cols="40" rows="5"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Submit" name="submit" /></td>
					</tr>
					</table>
					</form>
					
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