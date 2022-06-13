<?php

$con = new PDO("sqlsrv: Database = bbphp7; server = localhost\SQLEXPRESS; ConnectionPooling=0", "", "");

$con->beginTransaction(); //para fazer operações com segurana

$stmt = $con -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); //deleta conteúdo da tabela

$id = 3;

$stmt->execute(array($id));

$con->rollback();

//$con->commit();

echo "deletei!";


?>