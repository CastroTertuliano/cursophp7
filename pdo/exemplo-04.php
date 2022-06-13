<?php

$con = new PDO("sqlsrv: Database = bbphp7; server = localhost\SQLEXPRESS; ConnectionPooling=0", "", "");

$stmt = $con -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "jofre";
$password = "dfghh";
$id = 1;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterados ok!";

//echo json_encode($results);

?>