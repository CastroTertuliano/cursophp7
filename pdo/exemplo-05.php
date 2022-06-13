<?php

$con = new PDO("sqlsrv: Database = bbphp7; server = localhost\SQLEXPRESS; ConnectionPooling=0", "", "");

$stmt = $con -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); //deleta conteúdo da tabela

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "deletei!";


?>