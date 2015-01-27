<?
error_reporting("0");
$connectme = "yes";
include("../includes/cons.php");

$file_name = date("Y_m_d") . "_webinar_signups.csv";

header('Cache-Control:  private, max-age=10'); 
header_remove('Pragma');
header_remove('Vary');
header('Content-Type: text/csv; charset=latin1');
header("Content-Disposition:attachment;filename=" . $file_name);


$webinar_lists = array("id","series_start","name","email","phone","employees","hear","person_title","company_name","website","ip_address","fairs_id","dt");

$webinar_signups_qry = mysql_query("SELECT id,series_start,name,email,phone,employees,hear,person_title,company_name,website,ip_address,fairs_id,dt FROM webinar_signups");
while($webinar_signups[]=mysql_fetch_assoc($webinar_signups_qry));

$webinar_signups = array(0=>array("id","series_start","name","email","phone","employees","hear","person_title","company_name","website","ip_address","fairs_id","dt")) + $webinar_signups;

$out = fopen('php://output', 'w');

foreach($webinar_signups as $fields){
    
    fputcsv($out, $fields);

}

fclose($out);


mysql_close($link);
exit;
?>