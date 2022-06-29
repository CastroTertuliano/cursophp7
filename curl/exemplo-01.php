<?php
                    // aqui a gnte aprende a mostrar os dados do cep.
                    
    $cep = "27541420";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true); // com o true faz o json virar array

    print_r($data);

?>