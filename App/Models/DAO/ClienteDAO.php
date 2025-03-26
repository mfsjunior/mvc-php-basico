<?php
namespace App\Models\Dao;
use App\Models\Entidades\CLiente;

class ClienteDAO extends BaseDAO{

    public function salvar(Cliente $cliente){
        try{
            $nome = $cliente->getNome();
            $telefone = $cliente->getTelefone();
            $dtnasc = $cliente->getDtnasc();
            $cpf = $cliente->getCpf();

            return $this->insert(
                'cliente',
                ":nome, :telefone, :dtNasc, :cpf",
                [
                    ':nome'=>$nome,
                    ':telefone'=>$telefone,
                    ':dtNasc'=>$dtNasc,
                    ':cpf'=>$cpf
                ]
                );
        }
        catch(\Exception $e){
            throw new \Exception("erro de gravação de dados.", 500);
        }
    }
}
