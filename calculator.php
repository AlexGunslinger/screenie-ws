<?php

$META_TITLE = 'Hiring Cost Calculator';

include_once 'includes/header.php';

$PAGE_TITLE = "Hiring Cost Calculator";

?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1 style="font-size:38px;letter-spacing:0px;'"><?php echo $PAGE_TITLE; ?></h1>
					<h2 style="font-size:28px;">Let’s find out what you spend to hire, you might be surprised!</h2>
					<h3 style="font-size:21px;color:#1cc4cd;margin-bottom:30px;">This quiz takes about 3 minutes.</h3>

					<!-- Form -->

					<form role="form" class="g-col-8" method="POST" action="/calculator_next.php" id="signupForm" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" style="width:420px;margin-top:20px;" id="first_name" name="first_name" class="form-control" placeholder="First Name" required autofocus="autofocus">
						</div>
						<div class="form-group">
							<input type="text" style="width:420px;margin-top:20px;" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
						</div>
						<div class="form-group">
							<input type="email" style="width:420px;margin-top:20px;" id="email" name="email" class="form-control" placeholder="youremail@domain.com" required>
						</div>
						<div class="form-group">
							<input type="text" style="width:420px;margin-top:20px;" id="company_name" name="company_name" class="form-control" placeholder="Company Name" required> <!-- Not Auto Validated -->
						</div>
						<div class="form-group">
							<input type="text" style="width:420px;margin-top:20px;" id="number_of_employees" name="number_of_employees" class="form-control" placeholder="Number of Employees" required> <!-- Not Auto Validated -->
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg" style="background-color:#1cc4cd;background-image:none;margin-top:30px;">Next</button>
						</div>


					</form>

					<!-- End Form -->


				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>










