<html>
    <head>
        <h1><strong>Calculo salarial com contribiuções</strong></h1>
    <head>

    <body>

        <form method = "post">

            <input type = "text" name = "h1">
            <input type = "text" name = "h2">
            <input type = "submit" name = "Enviar">
        
        </form> 
        
    </body>
</html>

<?php

spl_autoload_register(function($file_name)
{

    $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

    if(file_exists($filename))
    {

        require_once($filename);

    }

});

$sal = new Salario();

if(!empty($_POST))
{
    
    //$value = escapeshellcmd($_POST["h1"]);
    $sal->setHorastrab(escapeshellcmd($_POST["h1"]));

    //$value1 = escapeshellcmd($_POST["h2"]);
    $sal->setHorah(escapeshellcmd($_POST["h2"]));

}else
{

    echo "Digite os valores corretamente";

}
echo "<br>"."O salário bruto foi de R$ ".$sal->getSalario()."<br>";

echo $sal->IR()."<br>";

echo $sal->inss()."<br>";

echo $sal->sind()."<br>";

echo $sal->salarioLiqd()."<br>";


?>