<?php

    require_once("config.php");

    
       /* $sql = new Sql();

            $usuarios = $sql->select("SELECT * FROM tb_usuarios");

            echo json_encode($usuarios);*/

    //carrega um usuário

    /*$lala = new Usuario();
    $lala->loadById(3);

    echo $lala;*/


    
    //carrega uma lista de usuários

/*$lista = Usuario::getList();

echo json_encode($lista);*/



    //carrega uma lista de usuários buscando pelo login

/*$search = Usuario::search("j");

echo json_encode($search);*/


    //carrega um usuário usando o login e a senha corretos.

/*$usuario = new Usuario();

$usuario->login("jaja","jojo");

echo $usuario;*/

    //criando um novo usuario

/*$aluno = new Usuario("lili", "lulu");

$aluno->insert();

echo $aluno;*/


    //alterar um usuário

/*$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("popo", "papa");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>