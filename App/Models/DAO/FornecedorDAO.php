<?php

namespace App\Models\Dao;
use App\Models\Entidades\Fornecedor;

class FornecedorDAO extends BaseDAO{ 

    public function verificaCnpj($cnpj)
    {
        try {

            $query = $this->select(
                "SELECT * FROM Fornecedor WHERE cnpj = '$cnpj' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }
    
    public function salvar(Fornecedor $fornecedor){
    
        try{
        $nome = $fornecedor->getNome();
        $endereco = $fornecedor->getEndereco();
        $nomeFantasia = $fornecedor->getNomeFantasia();
        $cnpj = $fornecedor->getCnpj();
        $tipoDeServico = $fornecedor->getTipoDeServico();
        $telefone = $fornecedor->getTelefone();
        $inscricaoEstadual = $fornecedor->getInscricaoEstadual();



        return $this->insert(
            'cliente',
            ":nome, :telefone, :endereco, :cpf, :endereco, :cnpj, :tioposervico, telefone",
            [
                ':nome'=>$nome,
                ':telefone'=>$telefone,
                ':endereco'=>$endereco,
                ':cnpj'=>$cnpj,
                ':NomeFanatasia'=>$nomeFantasia,
                ':Tiposervico'=>$tipoDeServico,
                ':InscricaoEstadual'=>$inscricaoEstadual

            ]
            );
    }
    catch(\Exception $e){
        throw new \Exception("erro de gravação de dados.", 500);
    }
}
}