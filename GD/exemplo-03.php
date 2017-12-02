<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100,100);

imagettftext($image, 32, 0, 320, 250,$titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Rodrigo rolim");
imagestring($image, 5, 440, 370, "Concluído em:".date("d/m/Y"), $titleColor);

header("Content-type: image/jpg");
imagejpeg($image);
imagedestroy($image);
 ?>