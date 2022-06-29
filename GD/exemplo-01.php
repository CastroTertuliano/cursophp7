<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256); //define o tamanho da imagem

    $black = imagecolorallocate($image, 0, 0, 0); //define a cor preta (imagecolorallocate(image, red, grenn, blue))

    $red = imagecolorallocate($image,255, 0, 0); //define a cor vermelha

imagestring($image, 5, 30, 120, "Heitor Generoso de Castro", $red); // para mostrar na tela - imagestring(image, font, x, y, string, color)

imagepng($image);

imagedestroy($image);

?>