<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ClienteDAO;
use App\Models\Entidades\Cliente;

class ClienteController extends Controller
{
    public function cadastro()
    {
        $this->render('/Cliente/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }
    

    public function salvar()
    {
        $Cliente = new Cliente();
        $Cliente->setNome($_POST['nome']);
        $Cliente->setEmail($_POST['email']);
        $Cliente->setCpf($_POST['cpf']);
        $Cliente->setTelefone($_POST['telefone']);
        $Cliente->setDatadenascimento($_POST['Dtnasc']);

        Sessao::gravaFormulario($_POST);

        $ClienteDAO = new ClienteDAO();

        if($ClienteDAO->verificaEmail($_POST['email'])){
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/cliente/cadastro');
        }

        if($ClienteDAO->salvar($Cliente)){
            $this->redirect('/Cliente/sucesso');
        }else{
            Sessao::gravaMensagem("Erro ao gravar");
        }
    }
    
    public function sucesso()
    {
        if(Sessao::retornaValorFormulario('nome')) {
            $this->render('/Cliente/sucesso');

            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }else{
            $this->redirect('/');
        }
    }

    public function index()
    {
        $this->redirect('/Cliente/cadastro');
    }

}