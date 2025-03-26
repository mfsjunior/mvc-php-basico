<?php
namespace App\Models\Entidades;

class Fornecedor{
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

    public function getNome($nome){
        return $this-> nome;
    }
    public function setNomeFantasia($nome){
        $this->nome = $nome;
    }

    
    public function getNomeFantasia($nomeFantasia){
        return $this-> nomeFantasia;
    }
    public function setNomeFanatsia($nomeFantasia){
        $this->nomeFantasia = $nomeFantasia;
    }

    
    public function getCnpj(){
        return $this-> cnpj;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    
    public function getInscricaoEstaual($inscricaoEstadual){
        return $this-> inscricaoEstadual;
    }
    public function setIncricacaoEstaduasl($inscricaoEstadual){
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    
    public function get($endereco){
        return $this-> endereco;
    }
    public function setEnendereco($endereco){
        $this->endereco = $endereco;
    }

    
    public function getipoDeServico($tipoDeServico){
        return $this-> tipoDeServico;
    }
    public function setipoDeServico($tipoDeServico){
        $this->tipoDeServico = $tipoDeServico;
    }

    
    public function getTelefone($telefone){
        return $this-> telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}