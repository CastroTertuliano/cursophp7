<?php

    spl_autoload_register(function($classname){

        $dirClass = "class";

        $filename = $dirClass . DIRECTORY_SEPARATOR . $classname .".php";

        if (file_exists($filename)){

            require_once($filename);
        }

    });

?>