<?php

$pasta = "arquivos";
$permissao = "0775";

if(is_dir($pasta)) mkdir($pasta, $permissao); //estabelece a permissão 0775 para a pasta 

echo "diretório criado com sucesso";

?>