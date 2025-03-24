<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\clienteDAO;
use App\Models\Entidades\cliente;

class clienteController extends Controller
{
    public function cadastro()
    {
        $this->render('/cliente/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $cliente = new cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        

        Sessao::gravaFormulario($_POST);

        $clienteDAO = new clienteDAO();

        if($clienteDAO->verificaEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/cliente/cadastro');
        }

        if($clienteDAO->salvar($cliente)){
            $this->redirect('/cliente/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    public function sucesso()
    {
        if(Sessao::retornaValorFormulario('nome')) {
            $this->render('/cliente/sucesso');

            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }else{
            $this->redirect('/');
        }
    }

    public function index()
    {
        $this->redirect('/cliente/cadastro');
    }

}