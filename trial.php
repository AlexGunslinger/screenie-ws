<?
	header("location: free-trial.php");
	exit;
?>
<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Start a Free Trial - Screenie</title>
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
					
					<h1>Start a Free Trial Today</h1>
					<br /><br />						
					<iframe width="640" height="360" src="http://www.youtube.com/embed/gZgHaT0cgSk?feature=player_detailpage&rel=0" frameborder="0" allowfullscreen></iframe>
					<br style="clear:both;" />
					<br style="clear:both;" />
					<br style="clear:both;" />
					<br style="clear:both;" />
					<h1>Complete the form below to get started!</h1>
					<br /><br />
					<form method="POST" action="/trial_thanks.php" id="signupForm" enctype="multipart/form-data" onsubmit="return formValidate(this.id);">
					<input type="hidden" name="request_type" value="trial" />
					<table style="margin-top:10px;width:100%;text-align:left;">
					<tr>
						<td style="text-align:right;width:180px;">First Name:</td>
						<td><input type="text" name="first_name" id="first_name" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;width:180px;">Last Name:</td>
						<td><input type="text" name="last_name" id="last_name" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Email:</td>
						<td><input type="text" name="email" id="email" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Phone:</td>
						<td><input type="text" name="phone" id="phone" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;">Number of Employees:</td>
						<td>
							<select name="employees" class="is_required">
							<option value="">Select one...</option>
							<option value="1-100">1-100</option>
							<option value="101-500">101-500</option>
							<option value="500">500+</option>
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
						<td style="text-align:right;width:180px;">Company Name:</td>
						<td><input type="text" name="company_name" id="company_name" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;width:180px;">Desired Subdomain:</td>
						<td><input type="text" name="sub_domain" id="sub_domain" class="is_required" onblur="ajaxView('sub_domain','',this.value);" />
						<div style="display:inline;" id="sub_domain_check"></div></td>
					</tr>
					<tr>
						<td style="text-align:right;width:180px;">Your Website:</td>
						<td><input type="text" name="website" id="website" class="is_required" /></td>
					</tr>
					<tr>
						<td style="text-align:right;width:180px;">Your Logo:</td>
						<td><input type="file" name="file" id="file" class="is_required" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Start My Free Trial" name="submit" /></td>
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