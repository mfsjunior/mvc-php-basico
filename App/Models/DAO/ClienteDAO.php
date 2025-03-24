<?php
namespace App\Models\DAO;

use App\Models\Entidades\Cliente;
//preciso chamar a entidade que estou trabalhando

class ClienteDAO extends BaseDAO
{

    public function salvar(Cliente $cliente){
        try {
            $nome =$cliente->getNome();
            $datanascimento =$cliente->getDtnasc();
            $telefone =$cliente->getTelefone();
            $cpf =$cliente->getCpf();
        return $this->insert(
            'cliente',
            ":nome, :datanascimento, :telefone, :cpf",
        
        [
            ':nome'=>$nome,
            ':datanascimento'=>$datanascimento,
            ':telefone'=>$datanascimento,
            ':cpf'=>$cpf
        ]    
        );

        }catch (\Exception $e){
            throw new \ Exception("Erro na gravaçõa de dados do cliente.",
            500);
        }
    }
}