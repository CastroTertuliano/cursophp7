<form method = "post">

    <input type = "text" name="login">
    <input type = "text" name="senha">
    <input type = "submit" name="enviar">
    
</form>

<?php

    require_once("config.php");

    $cliente = new Usuario();

    if (!empty($_POST)){

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $res = $cliente->login($login, $senha);

        echo $res;

    }





    
       /* $sql = new Sql();

            $usuarios = $sql->select("SELECT * FROM tb_usuarios");

            echo json_encode($usuarios);*/

    //carrega um usuário

    /*$lala = new Usuario();
    $lala->loadById(3);

    echo $lala;*/


    
    //carrega uma lista de usuários

/*$lista = Usuario::getList();

    //echo json_encode($lista);

foreach($lista as $kay => $value){
    echo "Usuário: ".$value['deslogin'].' | '."Senha: " .$value['dessenha'];
    echo '<hr>';
}*/



    //carrega uma lista de usuários buscando pelo login

/*$search = Usuario::search("j");

echo json_encode($search);*/




    //carrega um usuário usando o login e a senha corretos.

/*$usuario = new Usuario();

$usuario->login("jaja","jojo");

echo $usuario;*/

    //criando um novo usuario

/*$aluno = new Usuario("ligia", "lilas");

$aluno->insert();

echo $aluno;
*/

    //alterar um usuário

/*$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("popo", "papa");

echo $usuario;*/

/*$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;*/

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>
