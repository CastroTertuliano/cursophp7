<?php
                            //Função anônima

    function test($callback){
                //processo lento
        $callback();        

    }

test(function(){

    echo "Terminou";

})
?>