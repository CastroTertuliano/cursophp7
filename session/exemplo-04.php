<?php

require_once ("config.php");

session_regenerate_id(); //sempre que atualizar a página, vai mudar o número da sessãos

echo session_id (); 

var_dump ($_SESSION);

?>