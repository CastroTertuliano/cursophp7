<?php

$con = new mysqli("localhost", "root", "", "bbphp7"); //chama a classe nativa MySQLi

if($con->connect_error){

    echo "Error: ".$con->connect_error; //se der erro, mostra qual o erro

}

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()){ //fetch array ou fetch assoc chamam um array

    array_push($data, $row); //vai adicionar o array em um novo array
    //var_dump($row);

}

echo json_encode($data);

?>