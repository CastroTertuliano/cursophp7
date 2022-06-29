<?php

$name = "images";
//verifica se o diretório existe. Caso negativo, cria ele.

if (!is_dir($name)){

    mkdir($name);

    echo "diretório $name criado com sucesso";

} else{

    echo "O diretório ja existe";

}


?>