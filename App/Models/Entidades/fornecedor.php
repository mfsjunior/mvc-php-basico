<?php
namespace App\Models\Entidades;
class Fornecedor
{
    private $id;
    private $nome;
    private $endereco;
    private $cnpj;
    private $telefone;

    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }

    public function getnome(){
        return $this->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;
    }

    public function getendereco(){
        return $this->endereco;
    }
    public function setendereco($endereco){
        $this->endereco = $endereco;
    }

    public function getcnpj(){
        return $this->cnpj;
    }
    public function setcnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function gettelefone(){
        return $this->telefone;
    }
    public function settelefone($telefone){
        $this->telefone = $telefone;
    }

}