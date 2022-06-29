<?php

$filename = "5.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . "bse64, ". $base64;

?>

<a href = "<?php=$base64encode?>" target ="_blank"> Link para imagem</a>

<img src ="<?=$base64encode?>">