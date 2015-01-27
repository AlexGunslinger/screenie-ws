<?
session_start();
if($_SESSION[users][id] !=0){

	if($connectme == "yes"){
		include("cons.php");
		include("functions.php");
	}
	
}else{
	header("location: /login.php");
	exit;
}
?>