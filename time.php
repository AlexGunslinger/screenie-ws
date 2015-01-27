<?
	$nextWeek = time() + (14235 * 24 * 60 * 60);
	// 7 days; 24 hours; 60 mins; 60secs
	
	$time_int = time();
	echo date('Y-m-d h:i:s', $nextWeek);
	echo "<br />";
	echo $nextWeek;
	echo "<br />";
	echo strtotime(date('Y-m-d'));
	echo "<br />";
	echo $time_int;
?>