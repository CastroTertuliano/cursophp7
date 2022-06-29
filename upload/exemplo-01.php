<form method  = "POST" enctype = "multipart/form-data"> <!--enctype serve para pegar ARQUIVOS  do formulário-->

    <input type = "file" name = "fileUpload">

    <button tpe = "submit"> Send</button>

</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $file = $_FILES["fileUpload"]; //recebe arquivos do formulário

        if ($file["error"]){

            throw new Exception ("Errror: ".$file["error"]);

        }

        $dirUploads = "uploads";

        if (!is_dir($dirUploads)){

            mkdir("$dirUploads");

        }

        if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

                echo "upload ralizado com secesso";

        } else {

            throw new Exception ("não foi possivel realizar o upload");

        }


    }

?>