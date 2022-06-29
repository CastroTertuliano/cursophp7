<?php

function trataNome($name){

    if(!$name){

        throw new Exception("Nenhum nome informado", 1);
        

    }

    echo ucfirst($name)."<br>";

}

try{

    trataNome("joão");
    trataNome("");

} catch(Exception $e){

    echo $e->getmessage();

}finally{

    echo " ->executou o cloco try";

}
?>