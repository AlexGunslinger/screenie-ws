<?

$connectme = "yes";
include("../../includes/cons.php");

$domains_images = mysql_fetch_assoc(mysql_query("SELECT * FROM domains_images WHERE id = '$_GET[id]'"));

if(!empty($domains_images[id])){

	header("Content-Type: $domains_images[mime_type]");
	echo $domains_images[image_blob];
	
}

?>