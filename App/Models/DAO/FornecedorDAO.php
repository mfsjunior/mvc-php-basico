<?php
namespace App\Models\DAO;

use App\Models\Entidades\Fornecedor;
//preciso chamar a entidade que estou trabalhando

class FornecedorDAO extends BaseDAO
{

    public function salvar(Fornecedor $fornecedor){
        try {
            $nome =$fornecedor->getNome();
            $endereco =$fornecedor->getEndereco();
            $telefone =$fornecedor->getTelefone();
            $cnpj =$fornecedor->getCnpj();
        return $this->insert(
            'fornecedor',
            ":nome, :endereco, :telefone, :cnpj",
        
        [
            ':nome'=>$nome,
            ':endereco'=>$endereco,
            ':telefone'=>$telefone,
            ':cnpj'=>$cnpj
        ]    
        );

        }catch (\Exception $e){
            throw new \ Exception("Erro na gravaçõa de dados do fornecedor.",
            500);
        }
    }
}