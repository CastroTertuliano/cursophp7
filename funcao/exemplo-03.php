<?php

function ola($texto = "mundo", $periodo = "bom dia!"){ //obs: o parâmetro que não tm um valor padrão, sempre devem estar a esquerda

return "olá $texto! $periodo<br>";

}

echo ola();

echo ola("", "Boa noite");

echo ola("glaucio", "boa tarde");

echo ola("joão", "");

?>