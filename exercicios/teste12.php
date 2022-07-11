<html>
    <head>
        <h1>Calculo do pesso ideal para cada tipo de pessoa</h1>
    </head>

    <body>
            
        <form method = "post">
        
            <h2>Caso vc queira calcular o pesso ideal de um homem clique no botão abaixo</h2>
                <input type = "text" name = "alturaH">
                <input type = "submit" name = "Enviar">

            <h2>Caso vc queira calcular o pesso ideal de uma mulher clique no botão abaixo</h2>
               <input type = "text" name="alturaM">
               <input type = "submit" name = "Send">

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

    $imc = new Numero();

    if(!empty($_POST['alturaH']))
    {

        $pesoId = escapeshellcmd($_POST['alturaH']);

        echo $imc->calculaPI($pesoId);

    }if (!empty($_POST['alturaM']))
    {

        $pesoId = escapeshellcmd($_POST['alturaM']);

        echo $imc->calculaPIM($pesoId);

    }else
    {

        echo "preciso que informe uma altura";

    }


?>