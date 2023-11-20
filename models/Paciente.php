<?php

    class Paciente{
        public $id;
        public $name;
        public $email;
        public $password;
        public $imagem;
        public $token;


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

    interface PacienteDAOInterface{
        public function buildPaciente($data);
        public function create(Paciente $user, $authUser = false);
        public function update(Paciente $user, $redirect = true);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function destroyToken();
        public function changePassoword(Paciente $user);
    }

?>