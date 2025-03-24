<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\fornecedorDAO;
use App\Models\Entidades\fornecedor;

class fornecedorController extends Controller
{
    public function cadastro()
    {
        $this->render('/fornecedor/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $fornecedor = new fornecedor();
        $fornecedor->setNome($_POST['nome']);
        $fornecedor->setEmail($_POST['email']);
        $fornecedor->setCNPJ($_POST['CNPJ']);
        

        Sessao::gravaFormulario($_POST);

        $fornecedorDAO = new fornecedorDAO();

        if($usuarioDAO->verificaEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/fornecedor/cadastro');
        }

        if($fornecedorDAO->salvar($fornecedor)){
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
        if($fornecedorDAO->verificaCNPJ($_POST['CNPJ'])){
            Sessao::gravaMensagem("CNPJ existente");
            $this->redirect('/fornecedor/cadastro');
        }

        if($fornecedorDAO->salvar($fornecedor)){
            $this->redirect('/fornecedor/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }

    public function index()
    {
        $this->redirect('/fornecedor/cadastro');
    }

}