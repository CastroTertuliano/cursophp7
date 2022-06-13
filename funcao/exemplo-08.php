<?php

function soma(int ...$valores):string{//soma n inteiros e retorna string

    return array_sum ($valores);    //funçaõ do php que soma

}
echo var_dump(soma(2, 2));
echo "<br>";

echo soma(2,2);
echo "<br>";

echo soma(25,33);
echo "<br>";

echo soma(1.5,3.2,70);
echo "<br>";

?>