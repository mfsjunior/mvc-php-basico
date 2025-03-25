<?php

namespace App\Models\Dao;
use Exception;
use App\Models\Entidades\Cliente;

class clienteDAO extends BaseDAO
{
    public function verificaEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT * FROM cliente WHERE email = '$email' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }
    public function salvar (Cliente $cliente ) {
        try{
            $nome    =$cliente ->getNome();
            $telefone  =$cliente ->getTelefone();
            $dataDeNascimento  =$cliente->getDatadeNascimento();
            $cpf    =$cliente->getCPF();


            return $this ->insert(
            'cliente',
            ":nome,:telefone,:datanascimento,:cpf",
            [
                ':nome'=>$nome,
                ':telefone'=>$telefone,
                ':dataDenascimento'=>$dataDeNascimento,
                ':cpf'=>$cpf
            ]
            );

        }catch (\Exception $e){
            throw new \Exception ("Erro na gravação de dados.",
            500);
        }
    }

}