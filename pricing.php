<?php
$META_TITLE = 'Precio';
// $META_DESCRIPTION = "Provide SEO friendly description here!";
include_once 'includes/header.php';
$PAGE_TITLE = "Precio";
?>

<!-- Section -->
			<div class="inner-center section">
				<div class="pricing-wrapper">

					<h1><?php echo $PAGE_TITLE; ?></h1>
					<h2>How Many Employees do you Have?</h2>
					
					<ul class="nav nav-pills" id="companySizes">
					  <li class="active"><a href="#tier-1" data-toggle="tab">1 - 50</a></li>
					  <li><a href="#tier-2" data-toggle="tab">51 - 250</a></li>
					  <li><a href="#tier-3" data-toggle="tab">251 - 500</a></li>
					  <li><a href="#tier-4" data-toggle="tab">500+</a></li>
					</ul>
					
					<div class="g-row">
						<div class="tab-content current-price-div g-col-3">
						  <div class="tab-pane active" id="tier-1">
						  	<span class="price-per-month">Call Us</span>
						  	<br />
						  	<span class="price-subtitle">(81) 8850-8807</span>
						  </div>
						  <div class="tab-pane" id="tier-2">
						  	<span class="price-per-month">Call Us</span>
						  	<br />
						  	<span class="price-subtitle">(81) 8850-8807</span>
						  </div>
						  <div class="tab-pane" id="tier-3">
						  	<span class="price-per-month">Call Us</span>
						  	<br />
						  	<span class="price-subtitle">(81) 8850-8807</span>
						  </div>
						  <div class="tab-pane" id="tier-4">
						  	<span class="price-per-month">Call Us</span>
						  	<br />
						  	<span class="price-subtitle">(81) 8850-8807</span>
						  </div>
						</div>
						<div class="section-teal g-col-8 pull-right">
							<p>
								<strong>Now, you can screen and interview anytime, anywhere.</strong> Your jobs &amp; positions, number of interviews, and number of users are unlimited.</p>
							<p>
								Start now–Receive a one month FREE trial!
							</p>
						</div>
					</div>

					<script>
					 //  $('#myTab a').click(function (e) {
						//   e.preventDefault()
						//   $(this).tab('show')
						// })
					</script>


					<div class="g-col-7">
						<h2 class="home-heading-5">Try Screenie <strong>Free for 30 Days!</strong></h2>
						<p>
							See for yourself how Screenie can help you find better job candidates, save you money, and make your life easier.
						</p>						
					</div>
					<div class="g-col-5 pull-right">

						<div class="widget-cta-green-btn">
							<a href="free-trial.php" title="Try it Free for 30 Days" class="btn">
								Start a Free 30 Day Trial
								<span class='cta-subtitle'>No Credit Card Required</span>
							</a>
							<p>Take Screenie for a Test Drive, Hassle Free!</p>
						</div>

					</div>

					<div class="g-col-12 icon-blocks">
						<div class="g-col-4">
							<div class="icon-block">
								<a href="available.php" title="Hassle free 30 day trial.">
									<img src="images/try-it-free-icon-clock.png" alt="" />
								</a>
								<p>
									Available<br> <a href="available.php" title="Hassle free 30 day trial."><strong>Anytime, Anywhere</strong></a>
								</p>
							</div>
						</div>

						<div class="g-col-4">
							<div class="icon-block borderly">
								<a href="branded.php" title="Customized to match your company's look and feel.">
									<img src="images/try-it-free-icon-computer.png" alt="" />
								</a>
								<p>
									<a href="branded.php" title="Customized to match your company's look and feel."><strong>Branded Customizable</strong></a> Interview Portals
								</p>
							</div>
						</div>

						<div class="g-col-4">
							<div class="icon-block">
								<p class="pull-right" style="width: 53%;">
									<a href="sharable.php" title="Easily share, review, and rate interviewees among those involved in the hiring process."><strong>Sharable Interview</strong></a> &amp; Candidate Profiles
								</p>
								<a href="sharable.php" title="Easily share, review, and rate interviewees among those involved in the hiring process.">
									<img class="pull-right" src="images/try-it-free-icon-mobile-phone.png" alt="" />
								</a>

							</div>
						</div>
					</div>





				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>