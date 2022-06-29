<?php

$data = array(

    "empresa"=>"Casgen Biotecnologia"

);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "ok";

?>