<?php

define ("BANCO_DE_DADOS", [ //define uma constante BANCO_DE_DADOS  e atribui a ela um array

    '127.0.0.1',
    'root',
    'password',
    'teste'
], true); //com o true eu vai rodar igual se o usuário digitar maiúsculo ou minusculo.

print_r (BANCO_DE_DADOS); //mostra a constante do tipo array na tela

?>