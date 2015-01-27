<?php

session_start();

$_SESSION[calculator][number_of_employees] = $_POST[number_of_employees];
$_SESSION[calculator][company_name] = $_POST[company_name];
$_SESSION[calculator][email] = $_POST[email];
$_SESSION[calculator][first_name] = $_POST[first_name];
$_SESSION[calculator][last_name] = $_POST[last_name];

if(!empty($_POST[email])){
	
	$connectme = "yes";
	include("includes/cons.php");
	
	mysql_query("INSERT INTO hiring_calculator (id,company_name,first_name,last_name,email,number_of_employees,dt)
	VALUES 
	(null,'$_POST[company_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[number_of_employees]',NOW())");
	
	$hiring_calculator_id = mysql_insert_id();
	
	mysql_close($link);
}

$META_TITLE = 'Hiring Cost Calculator';

include_once 'includes/header.php';

$PAGE_TITLE = "Hiring Cost Calculator";

?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1 style="font-size:32px;font-weight:200;letter-spacing:0px;margin-bottom:30px;">Answer the following <span style="color:#1cc4cd;">6 Quick Questions:</span></h1>

					<!-- Form -->

					<form role="form" class="g-col-8" style="width:940px;" method="POST" action="/calculator_thanks.php" id="signupForm" enctype="multipart/form-data">
						<input type="hidden" name="number_of_employees" value="<?=$_POST[number_of_employees];?>" />
						<input type="hidden" name="hiring_calculator_id" value="<?=$hiring_calculator_id;?>" />
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="positions_hire_year" style="color:#524d46;font-size:20px;font-weight:200;">1. About how many positions does your company hire year?</label>
							<input type="text" style="width:420px;margin-top:20px;" id="positions_hire_year" name="positions_hire_year" class="form-control" required autofocus="autofocus">
						</div>
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="number_of_applicants" style="color:#524d46;font-size:20px;font-weight:200;">2. On average, how many applicants apply for each position?</label>
							<input type="text" style="width:420px;margin-top:20px;" id="number_of_applicants" name="number_of_applicants" class="form-control" required>
						</div>
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="number_of_phone_screens" style="color:#524d46;font-size:20px;font-weight:200;">3. On average, how many candidates do you conduct a phone screen with for each position?</label>
							<select class="form-control" name="number_of_phone_screens" style="width:420px;margin-top:20px;">						
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
							</select>
						</div>
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="face_to_face" style="color:#524d46;font-size:20px;font-weight:200;">4. On average, how many candidates do you interview after the phone screen?</label>
							<input type="text" style="width:420px;margin-top:20px;" id="face_to_face" name="face_to_face" class="form-control" required>
						</div>
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="employees_interviewing" style="color:#524d46;font-size:20px;font-weight:200;">5. On average, how many people are involved interviewing candidates for each position?</label>
							<input type="text" style="width:420px;margin-top:20px;" id="employees_interviewing" name="employees_interviewing" class="form-control" required>
						</div>
						
						<div class="form-group" style="margin-bottom:40px;">
							<label for="minutes_interviewing" style="color:#524d46;font-size:20px;font-weight:200;">6. On average, how long (in minutes) does it take to conduct one interview?</label>
							<input type="text" style="width:420px;margin-top:20px;" id="minutes_interviewing" name="minutes_interviewing" class="form-control" required>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg" style="background-color:#1cc4cd;background-image:none;">Next</button>
						</div>

					</form>

					<!-- End Form -->


				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>










