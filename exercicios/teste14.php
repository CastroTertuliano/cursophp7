<html>

    <head>

        <h3><strong>AQUI VOCÊ PODE CALCULAR A QUANTIDADE EXATA DE TINTAS QUE SERÁ NECESSÁRIA PARA O TRABALHO</strong></h3>

        

    </head>

    <body>

        <h4>Insira abaixo a área que você pretente pintar</h4>

        <form method = "post">

            <input type = "text" name = "area">
            <input type = "submit" name = "Calcular">

        </form>

    </body>

</html>

<?php

spl_autoload_register(function($file_name){

    $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

    if(file_exists($filename))
    {

        require_once($filename);

    }
 
});

$pint = new Pintura();

if(!empty($_POST))
{

    $pint->setAreaP($_POST["area"]);

    $result = $pint->latas();

    echo $result;

}else
{

    echo "Informe uma área correta!";

}

?>