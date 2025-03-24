<?php

namespace App\Models\DAO;

use App\Models\Entidades\Fornecedor;
//preciso chamar a entidade que estou trabalhando

class FornecedorDAO extends BaseDAO
{


 public function salvar(Fornecedor $fornecedor) {
    try {
        $nome =$fornecedor->getNome();
        $telefone = $fornecedor->getTelefone();
        $endereco = $fornecedor->getEndereco();
        $cnpj = $fornecedor->getCnpj();

        return $this->insert(
            'fornecedor',
            ":nome,telefone,:endereco,:cnpj",
            [
                ':nome'=>$nome,
                ':telefone'=>$telefone,
                ':endereco'=>$endereco,
                ':cnpj'=>$cnpj,
            ]
            );
 }catch(\Exception $e){
    throw new \Exception("Erro na gravação de dados.",
    500);
 }
 }
}