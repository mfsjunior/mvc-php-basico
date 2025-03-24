<?php

namespace App\Models\DAO;

use App\Models\Entidades\cliente;

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

    public  function salvar(cliente $cliente) {
        try {
            $nome      = $cliente->getNome();
            $email     = $cliente->getEmail();
            return $this->insert(
                'cliente',
                ":nome,:email",
                [
                    ':nome'=>$nome,
                    ':email'=>$email
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}