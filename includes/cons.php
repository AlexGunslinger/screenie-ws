<?
if($connectme == "yes"){
	$link = mysql_connect('localhost', 'screenmx', 'screen132o1o');
	mysql_select_db('screenie_mx', $link);
}else{
	header("location: /");
	exit;
}
?>
