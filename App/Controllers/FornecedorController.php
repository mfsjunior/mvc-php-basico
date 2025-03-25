<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\FornecedorDAO;
use App\Models\Entidade\Fornecedor\FornecerdorDAO;
use App\Models\Entidades\Fornecedor;

class FornecedorController extends Controller
{
    public function cadastro()
    {
        $this->render('/fornecedor/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $Fornecedor = new Fornecedor();
        $Fornecedor->setNomeFatansia($_POST['nomeFantasia']);
        $Fornecedor->setNome($_POST['nome']);
        $Fornecedor->setCnjp($_POST['cnpj']);
        $Fornecedor->setTelefone($_POST['telefone']);
        $Fornecedor->setEnderecoo($_POST['endereco']);
        $Fornecedor->setTipoDeServico($_POST['tipoDeServico']);
        $Fornecedor->setInscricaoEstadual($_POST['incricaoestadual']);
        



        Sessao::gravaFormulario($_POST);

        $FornecedorDAO = new FornecerdorDAO();

        if($FornecedorDAO->verificaCnpj($_POST['cnpj'])){
            Sessao::gravaMensagem("Fornecedor Existente");
            $this->redirect('/fornecedor/cadastro');
        }

        if($FornecedorDAO->salvar($Fornecedor)){
            $this->redirect('/fornecedor/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    public function sucesso()
    {
        if(Sessao::retornaValorFormulario('nome')) {
            $this->render('/fornecedor/sucesso');

            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }else{
            $this->redirect('/');
        }
    }

    public function index()
    {
        $this->redirect('/fornecedor/cadastro');
    }

}