<?php

namespace App\Models\Entidades;

class Cliente {

    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $dataDeNascimento;

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
    public function getDatadenascimento(){
        return $this ->dataDeNascimento;
    }
    public function setDatadenascimento($datadenascimento){
        $this->dataDeNascimento = $datadenascimento;
}

}