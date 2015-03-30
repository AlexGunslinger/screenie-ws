<?php

$connectme = "yes";
include("includes/cons.php");


$name1=$_POST['name_on_certificate'];
$name2=$_POST['name_on_certificate_check'];
$webinar_id=$_POST['curso'];
$email=$_POST['email'];
$valid=false;

echo empty($name1);
if(!(empty($name1)&&empty($name2)&&empty($email)))
{
	$valid=true;
}
else
{
	// header('Location: certificate.php?nl=1');
	// exit();
}

if($valid)
{
	$registred_users=mysql_query("SELECT * FROM certificate WHERE email = '".$email."' AND webinar_id = ".$webinar_id);
	while($u=mysql_fetch_assoc($registred_users))
	{
		if($u['email']==$email)
		{
			$valid=true;
		}
	}
}
else
{
	header('Location: certificate.php?nv=1');
	exit();
}

if($valid) //si esta mail esta registrado para este webinar 
{	
	$query=mysql_query("SELECT * FROM certificate WHERE email = '".$email."' AND webinar_id = ".$webinar_id);
	$flag=mysql_fetch_assoc($query);
	//print_r($flag);

	if(mysql_num_rows($query)>0)
	{
		if($flag['flag']==0) 
		{
			if($name1==$name2)
			{
				echo "<a href=/certificates/".$_POST['name_on_certificate']."-".$webinar_id.".jpg download id='image'></a>";
				//set flag to 1 
				mysql_query("UPDATE certificate SET flag=1 where email='".$email."' and $webinar_id=".$webinar_id);
	
			}
			else //wrong names
			{
				//echo "wn";
				header('Location: certificate.php?wn=1');
				exit();
			}
		}
		else //already downloaded
		{
			header('Location: certificate.php?ad=1');
			exit();
		}
	}
	else
	{	
		//echo "nr";
		header('Location: certificate.php?nv=1');
		exit();
	}
}
else
{
	header('Location: certificate.php?nv=1');
	exit();
}

?>

<script>


if(document.getElementById("image")){ //valid

    document.getElementById('image').click();
	window.location.href =  'certificate.php?wi=1';	

} else {
    //not valid
	window.location.href =  'certificate.php?nv=1';
}


</script>