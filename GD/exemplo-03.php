<?php

            //AQUI A GENTE APRENDE A EDITAR UMA IMAGEM E SUA FONTE

    $image = imagecreatefromjpeg("certificado.jpg"); //carrega a imagem

    $titleColor = imagecolorallocate($image, 0, 0, 0); //defini uma cor

    $gray = imagecolorallocate($image, 100, 100, 100); //define outra cor

    imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO"); //escreve texto passando a O tamanho, a inclinação, cor e caminho e o texto

    imagettftext($image, 32, 0, 375, 350, $titleColor,  __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Heitor Generoso de Castro"); //escreve texto passando a O tamanho, a inclinação distancia superior, cor e caminho

    imagestring($image, 3, 440, 370, utf8_decode("Concuído em: ").date("d-m-Y"), $titleColor); //escreve texto passando a imagem, as bordas e a cor

    header("Content-type: image/jpeg"); 

    imagejpeg($image); //mostra o arquivo com data

    imagedestroy($image);//destroy o $image

?>