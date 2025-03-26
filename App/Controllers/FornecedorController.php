<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\FornecedorDAO;
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
        $Fornecedor->setNomeFantasia ($_POST['nomeFantasia']);
        $Fornecedor->setNome($_POST['nome']);
        $Fornecedor->setCnpj($_POST['cnpj']);
        $Fornecedor->setTelefone($_POST['telefone']);
        $Fornecedor->setEndereco($_POST['endereco']);
        $Fornecedor->setTipoDeServico($_POST['tipoDeServico']);
        $Fornecedor->setInscricaoEstadual($_POST['incricaoestadual']);
        
        Sessao::gravaFormulario($_POST);

        $FornecedorDAO = new FornecedorDAO();

        if($FornecedorDAO->verificaCnpj($_POST['cnpj'])){
            Sessao::gravaMensagem("cnpj já está cadastrado");
            $this->redirect('/Fornecedor/cadastro');
        }

        if($usuarioDAO->salvar($Usuario)){
            $this->redirect('/usuario/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
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