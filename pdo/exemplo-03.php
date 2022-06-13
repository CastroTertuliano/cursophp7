<?php

$con = new PDO("mysql:host=localhost; dbname=bbname, "root", "root");

$stmt = $con -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";

$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "inserido";

//echo json_encode($results);

?>