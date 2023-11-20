<?php

    class Medico{
        public $id;
        public $name;
        public $email;
        public $password;
        public $image;
        public $token;
        public $especialidade;

        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function generatePassword($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }

        public function imageGenerateName(){
            return bin2hex(random_bytes(60)) . ".jpg";
        }

    }



    interface MedicoDAOInterface{
        public function buildMedico($data);
        public function create(Medico $user, $authUser = false);
        public function update(Medico $user, $redirect = true);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function destroyToken();
        public function changePassoword(Medico $user);
        public function findByEspecialidade($especialidade);
    }

?>