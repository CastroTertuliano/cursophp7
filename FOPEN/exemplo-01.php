<?php

    //$file = fopen("log.txt", "w+"); cria e adiciona

    $file = fopen("log.txt", "a+"); //só adiciona

    fwrite($file, date("Y-m-d H:i:s") . "\r\n");

    fclose($file);

    echo "Arquivo criado com sucesso";

?>