<?php
error_reporting(0);
session_start();

$_SESSION[calculator][number_of_employees] = $_POST[number_of_employees];
$_SESSION[calculator][positions_hire_year] = $_POST[positions_hire_year];
$_SESSION[calculator][number_of_applicants] = $_POST[number_of_applicants];
$_SESSION[calculator][number_of_phone_screens] = $_POST[number_of_phone_screens];
$_SESSION[calculator][face_to_face] = $_POST[face_to_face];
$_SESSION[calculator][employees_interviewing] = $_POST[employees_interviewing];
$_SESSION[calculator][minutes_interviewing] = $_POST[minutes_interviewing];

if(!empty($_POST[hiring_calculator_id])){
	
	$connectme = "yes";
	include("includes/cons.php");
	
	mysql_query("UPDATE hiring_calculator
	SET 
	positions_hire_year = '$_POST[positions_hire_year]',
	number_of_applicants = '$_POST[number_of_applicants]',
	number_of_phone_screens = '$_POST[number_of_phone_screens]',
	face_to_face = '$_POST[face_to_face]',
	employees_interviewing = '$_POST[employees_interviewing]',
	minutes_interviewing = '$_POST[minutes_interviewing]'
	WHERE id = '$_POST[hiring_calculator_id]'");
	
	mysql_close($link);
}

$average_hourly_screener = 8;
$average_hourly_admin = 20;
$pesos_to_dollars = 13;

$cost_to_advertise_jobs_per_year = ($_SESSION[calculator][positions_hire_year] * 85) * $pesos_to_dollars;
$cost_of_labor_to_post_jobs_year = ($_SESSION[calculator][positions_hire_year] * (10/60) * $average_hourly_screener) * $pesos_to_dollars;
$cost_of_time_reviewing_resumes = (($_SESSION[calculator][number_of_applicants] * $_SESSION[calculator][positions_hire_year]) * (2/60) * $average_hourly_screener) * $pesos_to_dollars;
$cost_of_time_conducting_phone_screens = (($_SESSION[calculator][positions_hire_year] * $_SESSION[calculator][number_of_phone_screens]) * (15/60) * $average_hourly_screener) * $pesos_to_dollars;
$cost_of_interviewing = ( ((($_SESSION[calculator][face_to_face] * (10/60)) * $average_hourly_screener) + ($_SESSION[calculator][face_to_face] * ($_SESSION[calculator][minutes_interviewing]/60) * $_SESSION[calculator][employees_interviewing] * $average_hourly_admin)) * $_SESSION[calculator][positions_hire_year]) * $pesos_to_dollars;
$cost_info_packet = ( (30/60) * $_SESSION[calculator][face_to_face] * $average_hourly_screener * $_SESSION[calculator][positions_hire_year] ) * $pesos_to_dollars;

$current_total_cost = ($cost_to_advertise_jobs_per_year + $cost_of_labor_to_post_jobs_year + $cost_of_time_reviewing_resumes + $cost_of_time_conducting_phone_screens + $cost_of_interviewing + $cost_info_packet);

$screenie_cost_to_advertise_jobs_per_year = ($cost_to_advertise_jobs_per_year * .1);
$screenie_cost_of_labor_to_post_jobs_year = ($cost_of_labor_to_post_jobs_year / 2);
$screenie_cost_of_time_reviewing_resumes = ($cost_of_time_reviewing_resumes * .1);
$screenie_cost_of_time_conducting_phone_screens = ($cost_of_time_conducting_phone_screens * .1);
$screenie_cost_of_interviewing = ($cost_of_interviewing * .75);
$screenie_cost_info_packet = ($cost_info_packet * .3);

$screenie_total_cost = ($screenie_cost_to_advertise_jobs_per_year + $screenie_cost_of_labor_to_post_jobs_year + $screenie_cost_of_time_reviewing_resumes + $screenie_cost_of_time_conducting_phone_screens + $screenie_cost_of_interviewing + $screenie_cost_info_packet);

$screenie_difference = ($current_total_cost - $screenie_total_cost);
$screenie_difference_percentage = (100 - (($screenie_total_cost / $current_total_cost) * 100));

$META_TITLE = 'Hiring Cost Calculator';

include_once 'includes/header.php';

$PAGE_TITLE = "Hiring Cost Calculator";

?>
<script type="text/javascript" src="/js/js.js"></script>
<!-- Section -->
			<div class="inner-center section">
				<div>

					<h1 style="font-size:35px;letter-spacing:0px;'">Screenie can save <?=$_SESSION[calculator][company_name];?> up to <strong>$<?=number_format($screenie_difference);?></strong>* per year. </h1>
					<h2 style="font-size:35px;color:#1cc4cd;">That’s a <?=number_format($screenie_difference_percentage);?>% improvement!</h2>
					
					<div style="width:1px;height:20px;">&nbsp;</div>
					
					<div style="width:245px;height:45px;background-color:#1ccd29;color:white;font-size:16px;text-align:center;padding:10px;display:inline;float:right;border-top-left-radius: 10px;border-top-right-radius:10px;margin-left:1px;">With Screenie</div>
					<div style="width:255px;height:45px;background-color:#ff6262;color:white;font-size:14px;line-height:14px;text-align:center;padding:8px;display:inline;float:right;border-top-left-radius: 10px;border-top-right-radius:10px;font-weight:200;"><?=$_SESSION[calculator][company_name];?> <br />Current Process</div>
					
					<div style="width:940px;height:491px;font-size:16px;border:1px solid #cdd6dd;border-top-left-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:44px;">
					
						<div style="width:245px;height:490px;color:white;font-size:16px;display:inline;float:right;border-left:1px solid #cdd6dd;text-align:center">
						
							<div style="height:75px;font-size:34px;color:#37322a;margin-top:53px;color:#1ccd29;">$<?=number_format($screenie_total_cost);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($screenie_cost_to_advertise_jobs_per_year);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;">$<?=number_format($screenie_cost_of_labor_to_post_jobs_year);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($screenie_cost_of_time_reviewing_resumes);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;">$<?=number_format($screenie_cost_of_time_conducting_phone_screens);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($screenie_cost_of_interviewing);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;border-bottom-right-radius:10px;">$<?=number_format($screenie_cost_info_packet);?></div>
													
						</div>
						
						<div style="width:255px;height:490px;color:white;font-size:16px;display:inline;float:right;border-left:1px solid #cdd6dd;text-align:center">
						
							<div style="height:75px;font-size:34px;color:#37322a;margin-top:53px;color:#ff6262;">$<?=number_format($current_total_cost);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($cost_to_advertise_jobs_per_year);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;">$<?=number_format($cost_of_labor_to_post_jobs_year);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($cost_of_time_reviewing_resumes);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;">$<?=number_format($cost_of_time_conducting_phone_screens);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;background-color:#fcfcfc;">$<?=number_format($cost_of_interviewing);?></div>
							
							<div style="height:60px;width:100%;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;">$<?=number_format($cost_info_packet);?></div>
													
						</div>
						
						<div style="width:430px;height:490px;font-size:16px;display:inline;float:right;">
						
							<div style="height:75px;font-size:34px;color:#37322a;margin-top:53px;margin-left:25px;">Total Costs</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;background-color:#fcfcfc;">
							
								<div style="display:inline;margin-left:55px;">Cost of Advertising Jobs</div>
							
							</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;">
							
								<div style="display:inline;margin-left:55px;">Cost of labor to post jobs</div>
							
							</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;background-color:#fcfcfc;">
							
								<div style="display:inline;margin-left:55px;">Cost of time reviewing resumes</div>
							
							</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;">
							
								<div style="display:inline;margin-left:55px;">Cost of time conducting phone screens</div>
							
							</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;background-color:#fcfcfc;">
							
								<div style="display:inline;margin-left:55px;">Cost of interviewing</div>
							
							</div>
							
							<div style="height:60px;width:438px;font-size:16px;color:#7e7e7e;padding-top:18px;border-top:1px solid #cdd6dd;margin-left:-8px;border-bottom-left-radius:10px;">
							
								<div style="display:inline;margin-left:55px;">Cost of putting together candidate info packet</div>
							
							</div>
						
						</div>
					
					</div>
					
					<div style="width:245px;min-height:60px;font-size:22px;text-align:center;padding-top:13px;border-bottom-left-radius: 10px;border-bottom-right-radius:10px;margin-left:575px;border:1px solid #cdd6dd;border-top:none;">
						Difference: <span style="color:#1cc4cd">$<?=number_format($screenie_difference);?></span>	
					</div>
					
					<div style="width:1px;height:40px;">&nbsp;</div>
					
					<div style="width:940px;font-size:16px;">
						
						<button type="button" class="btn btn-success btn-lg" style="background-color:#1cc4cd;background-image:none;font-size:32px;border:none;font-weight:200;float:right;height:100px;width:300px;" onclick="document.location.href = 'free-trial.php';">Schedule a Demo</button>
						
						<span style="font-size:39px;color:#37322a;">Pretty Stunning eh?</span> 
						<br />
						<span style="font-size:22px;color:#969696;">Ready learn how Screenie can make you the</span> <span style="font-size:22px;color:#1cc4cd;">Office Hero?</span>
					
					</div>
					
					<div style="width:1px;height:80px;">&nbsp;</div>
					
					<span style="color:#7e7e7e;font-size:10px;">*This calculation is based on several standard industry assumptions and is not an exact number or proposal from Screenie. It is meant simply to give you a general idea of the value that Screenie can provide you and results will vary depending on specific company circumstances. </span>
					
					<br /><br />
					<p style="color:#7e7e7e;font-size:10px;">Assumptions:
						<ul style="color:#7e7e7e;font-size:10px;">
							<li>Average company posts to about 2 job boards at an average cost of $<? print 85 * $pesos_to_dollars; ?> Pesos.</li>
							<li>The average company spends about 10 minutes posting one job and 2 minutes reviewing each application.</li>
							<li>The average company spends about 10-15 min scheduling phone screens and interviews.</li>
							<li>The average company spends about 15 minutes conducting a phone screen and 45 minutes in an interview.</li>
							<li>The average person phone screening candidates makes about $<? print 8 * $pesos_to_dollars; ?> Pesos per hour and average person conducting an interview makes $<? print 20 * $pesos_to_dollars; ?> Pesos per hour.</li>
							<li>The average company spends about 30 min putting together info packets for final candidates over the entire hiring process.</li>
						</ul>	
					</p>
					
					<div style="width:1px;height:20px;">&nbsp;</div>
					
				</div>
			</div> <!-- </section> -->


<?php
include_once 'includes/footer.php';
?>