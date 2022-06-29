<?php

    class Usuario {

        private $idusuario;
        private $dessenha;
        private $deslogin;
        private $dtcadastro;
        private $email;
        private $cep;

        public function getIdusuario(){

            return $this->idusuario;

        }
        
        public function setIdusuario($value){

            $this->idusuario = $value;

        }
        public function getDessenha(){

            return $this->dessenha;
            
        }
        
        public function setDessenha($value){

            $this->dessenha = $value;

        }
        public function getDeslogin(){

            return $this->deslogin;
            
        }
        
        public function setDeslogin($value){

            $this->deslogin = $value;

        }
        public function getDtcadastro(){

            return $this->dtcadastro ;
            
        }
        
        public function setDtcadastro($value){

            $this->dtcadastro = $value;

        }
        public function getEmail(){

            return $this->email ;
            
        }
        
        public function setEmail($value){

            $this->email = $value;

        }
        public function getCep(){

            return $this->cep ;
            
        }
        
        public function setCep($value){

            $this->cep = $value;

        }

        //carregando dados do banco para a variavel $id

        public function loadById($id){

            $sql = new Sql();

            $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

                ":ID" => $id
            ));

            if (count($results) > 0){

                $this->setData($results[0]);

            }

        }

        //lista todos os usuários na tabela

        public static function getList(){
           
            $sql = new SQL();

            return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
            

        }  
        
        //busca usuário

        public static function search($login){

            $sql = new Sql();

            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array (

                ':SEARCH' => "%".$login."%"
            ));
        }

        //carrega um usuário usando o login e a senha
        
        public function login ($login, $password){

            $sql = new Sql();

            $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(

                ":LOGIN" => $login,
                ":PASSWORD" => $password
            ));

            if (count($results) > 0){

                $this->setData($results[0]);

            } else {

              echo "Usuario não cadastrado";
            
            }

        }

        //seta dados

        public function setData($data){

            $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro']));

        }

        public function insert(){

            $sql = new Sql();

            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(

                ':LOGIN'=>$this->getDeslogin(),
                ':PASSWORD'=>$this->getDessenha()
            ));

            if (count ($results)>0){

                $this->setData($results[0]);
            

            }
        }

        public function update($login, $password){

            $this->setDeslogin($login);
            $this->setDessenha($password);

            $sql = new Sql();

            $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(

                ':LOGIN'=>$this->getDeslogin(),
                ':PASSWORD'=>$this->getDessenha(),
                ':ID'=>$this->getIdusuario()
            ));
        }

        public function delete(){

            $sql = new Sql;

            $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(

                ':ID'=>$this->getIdusuario()
            ));

            $this->setIdusuario(0);
            $this->setDeslogin("");
            $this->setDessenha("");
            $this->setDtcadastro(new DateTime());

        }

        public function __construct($login = "", $password = ""){

            $this->setDeslogin($login);
            $this->setDessenha($password);
        }

        public function __toString(){

            return json_encode(array(

                "idusuario" => $this->getIdusuario(),
                "deslogin" => $this->getDeslogin(),
                "dessenha" => $this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d-m-Y H:i:s")
 
            ));
        }


    }
?>