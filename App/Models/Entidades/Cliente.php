<?php
namespace App\Models\Entedides;
class Cliente{
        private $id;
        private $nome;
        private $email;
        private $cpf;
        private $telefone;
        private $dtnasc;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }      

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }      

        public function getCpf(){
            return $this-> cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getDtnasc(){
            return $this-> dtnasc;
        }
        public function setDtnasc($dtnasc){
            $this-> dtnasc = $dtnasc;
        }
    }