<?php

namespace App\Models\DAO;

use App\Models\Entidades\fornedor;

class fornecedorDAO extends BaseDAO
{
    public function verificaEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT * FROM fornecedor WHERE email = '$email' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }
    
        public function verificaCNPJ($CNPJ)
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

    public  function salvar(fornecedor $fornecedor) {
        try {
            $nome      = $fornecedor->getNome();
            $email     = $fornecedor->getEmail();
            return $this->insert(
                'fornecedor',
                ":nome,:email,:CNPJ",
                [
                    ':nome'=>$nome,
                    ':email'=>$email,
                    ':CNPJ'=>$CNPJ
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}