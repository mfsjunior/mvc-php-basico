<?php

namespace App\Models\Entidades;

class fornecedor
{
    
    private $nome;
    private $email;
    private $CNPJ;
    
    

    
    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;


    }
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
    }
}