<?php

namespace App\Models\Entidade\Fornecedor;

use App\Models\DAO\BaseDAO;
use Exception;
use App\Models\Entidades\Fornecedor;

class FornecerdorDAO extends BaseDAO
{
    public function verificaCnpj($cnpj)
    {
        try {

            $query = $this->select(
                "SELECT * FROM fornecedor WHERE cnpj = '$cnpj' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public function salvar (Fornecedor $fornecedor ) {
        try{
            $nome    =$fornecedor ->getNome();
            $telefone  =$fornecedor ->getTelefone();
            $nomeFantasia  =$fornecedor->getNomeFantasia();
            $cnpj   =$fornecedor->getCnpj();
            $inscricaoEstadual  =$fornecedor->getInscricaoEstadual();
            $endereco   =$fornecedor->getEndereco();
            $tipoDeServico =$fornecedor->getTipoDeServico();
            
            
            



            return $this->insert(
            'fornecedor',
            ":nome,:telefone,:nomeFantasia,:cnpj,:inscricaoEstadual,:endereco,:tipoDeServico,:id",
            [

                ':nome'=>$nome,
                ':telefone'=>$telefone,
                ':nomeFantasia'=>$nomeFantasia,
                ':cnpj'=>$cnpj,
                ':tipoDeServico' =>$tipoDeServico,
                ':inscricaEstadual'=>$inscricaoEstadual
            ]
            );

        }catch (\Exception $e){
            throw new \Exception ("Erro na gravação de dados.",
            500);
        }
    }






}