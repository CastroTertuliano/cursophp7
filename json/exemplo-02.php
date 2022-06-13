<?php

$json = '[{"nome":"Joao","Idade":20},{"nome":"Glauco","Idade":25}]'; // convrte JSON para array

$data = json_decode($json, true); 

var_dump($data);

?>