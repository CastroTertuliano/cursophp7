<?php

session_start();

//depois d everificar login e senha reinicie o ID da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>