<?php

$con = new mysqli("localhost", "root", "", "bbphp7"); //chama a classe nativa MySQLi

if($con->connect_error){

    echo "Error: ".$con->connect_error; //se der erro, mostra qual o erro

}

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)"); //para fazer entrada de dados4

$stmt->bind_param("ss", $login, $pass);

$login = "user";

$pass = "12345";

$stmt->execute();

//aqui vc vê que pode colocar outros dados...eles são adicionados a outra linha da tabela

$login = "root";
$pass = "@@@@";

$stmt->execute();

?>