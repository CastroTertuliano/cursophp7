<?php

$con = new PDO("sqlsrv: Database = bbphp7; server = localhost\SQLEXPRESS; ConnectionPooling=0", "", "");

$stmt = $con -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($results);

?>