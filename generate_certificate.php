<?php


// Set the content-type
header('Content-Type: image/png');

// Create Image From Existing File
$im = imagecreatefromjpeg('certificates/plantilla.jpg');

  // Get image Width and Height
 $image_width = imagesx($im);  

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
$red =imagecolorallocate($im, 255, 0, 0);

$name=$_GET['h1'];
$webinar_id=$_GET['h2'];

// The text to draw

// Replace path by your own font path
$font = 'certificates/lanenar.ttf';
$georgia = 'certificates/Georgia.ttf';
$font_size=8.5;
$name_size=20;
$title_size=16;
$certificate_size=30;

if($webinar_id==1)
{
	$certificado="Certificado Screenie Nivel Oro";
	$webinar_name="Seminario de Mejores Prácticas de Reclutamiento y Selección ";
	$start_date="4 de febrero";
	$end_date="18 de marzo de 2015";
}
else
{
	$certificado="Certificado Screenie Nivel Platino";
	$webinar_name="Seminario de Reclutamiento en Redes Sociales";
	$start_date="11 de febrero";
	$end_date="25 de marzo de 2015.";
}

	  $x = ($image_width/2) - (strlen($name));



// Add the text 
// array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
imagettftext($im, 20, 0, 500, 790, $black, $georgia, $start_date);
imagettftext($im, 20, 0, 100, 590, $black, $georgia, $end_date);

// Get image Width and Height
$image_width = imagesx($im);  
$image_height = imagesy($im);

// Get Bounding Box Size
$text_box = imagettfbbox($name_size,$angle,$font,$name);

// Get your Text Width and Height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[3]-$text_box[1];

// Calculate coordinates of the text
$x = ($image_width/2) - ($text_width/2);

// Add the text
imagettftext($im, $name_size, 0, $x, 230, $black, $font, $name);

// Get image Width and Height
$image_width = imagesx($im);  
$image_height = imagesy($im);

// Get Bounding Box Size
$text_box = imagettfbbox($title_size,$angle,$font,$webinar_name);

// Get your Text Width and Height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[3]-$text_box[1];

// Calculate coordinates of the text
$x = ($image_width/2) - ($text_width/2);

// Add the text
imagettftext($im, $title_size, 0, $x, 140, $black, $font, $webinar_name);

// Get Bounding Box Size
$text_box = imagettfbbox($certificate_size,$angle,$font,$certificado);

// Get your Text Width and Height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[3]-$text_box[1];

// Calculate coordinates of the text
$x = ($image_width/2) - ($text_width/2);

// Add the text
imagettftext($im, $certificate_size, 0, $x, 105, $black, $font, $certificado);

// Add the text
imagettftext($im, $font_size, 0, 510, 294, $black, $georgia, $start_date);

// Add the text
imagettftext($im, $font_size, 0, 330, 314, $black, $georgia, $end_date);

 date_default_timezone_set('America/Monterrey');
      $day=date('d');
      $month=date('m');
      $year=date('Y');
      $fecha="A ".$day." de ".getMonth($month)." del ".$year;

      imagettftext($im, $font_size, 0, 192, 354, $black, $georgia, $fecha);



// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);

function getMonth($m) {
    switch ($m) 
    {
      case 1: return "Enero"; break;
      case 2: return "Febrero"; break;
      case 3: return "Marzo"; break;
      case 4: return "Abril"; break;
      case 5: return "Mayo"; break;
      case 6: return "Junio"; break;
      case 7: return "Julio"; break;
      case 8: return "Agosto"; break;
      case 9: return "Septiembre"; break;
      case 10: return "Octubre"; break;
      case 11: return "Noviembre"; break;
      case 12: return "Diciembre"; break;
      }
}
 
?>
