<?php

require_once("config.php");

//session_unset ($_SESSION['NOME']); //APAGA O QUE TEM EM SESSION

echo $_SESSION ['nome']; //mostra a sessão na tela

session_destroy()// reseta TUDO;

?>