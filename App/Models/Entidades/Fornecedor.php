<?php

namespace App\Models\Entidades;

class Fornecedor {

    private $id;
    private $nome;
    private $nomeFantasia;
    private $cnpj;
    private $inscricaoEstadual;
    private $endereco;
    private $tipoDeServico;
    private $telefone;

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

    public function getNomeFantasia(){
        return $this->nomeFantasia;
    }
    public function setNomeFatansia($nomeFantasia){
        $this->nomeFantasia = $nomeFantasia;
    }      

    public function getCnpj(){
        return $this-> cnpj;
    }
    public function setCnjp($cnpj){
        $this->cnpj = $cnpj;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getInscricaoEstadual(){
        return $this->inscricaoEstadual;
    }
    public function setInscricaoEstadual($inscricaoEstadual){
        $this->inscricaoEstadual= $inscricaoEstadual;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEnderecoo($endereco){
        $this->endereco = $endereco;
    }
    public function getTipoDeServico(){
        return $this->tipoDeServico;
    }
    public function setTipoDeServico($tipoDeServico){
        $this->tipoDeServico = $tipoDeServico;
    }
}