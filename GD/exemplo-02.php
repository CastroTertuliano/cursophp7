<?php

$image = imagecreatefromjpeg("certificado.jpg"); //carrega a imagem

$titleColor = imagecolorallocate($image, 0, 0, 0); //defini uma cor

$gray = imagecolorallocate($image, 100, 100, 100); //define outra cor

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor); //escreve texto passando a imagem, as bordas e a cor

imagestring($image, 5, 440, 350, "Heitor Generoso de Castro", $titleColor);  //escreve texto passando a imagem, as bordas e a cor

imagestring($image, 3, 440, 370, utf8_decode("Concuído em: ").date("d-m-Y"), $titleColor); //escreve texto passando a imagem, as bordas e a cor

header("Content-type: image/jpeg"); 

imagejpeg($image, "certificado-".date("Y-m-d").".jpg"); //cria o arquivo com data

imagedestroy($image);//destroy o $image

?>