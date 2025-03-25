<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="starter template">
            <h1>CADASTRO DE FORNECEDOR</h1>
    <div class="btn-tollbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type= "button" class= "btn btn-sn btn-outline-secondary">Excel</button>
            <button type= "button" class= "btn btn-sn btn-outline-secondary">PDF</button>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
            <h3>Cadastro de Fornecedor</h3>

            <?php if($Sessao::retornaMensagem()) { ?>
                <div class="alert alert-warning" 
                role="alert"><?php echo $Sessao::retornaMensagem(); ?>
                </div>
            <?php } ?>

            <form actions="http:// <?php echo APP_HOST; ?>/fornecedor/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Seu nome" value= <?php echo $Sessao::retornaValorFormulario('nome'); ?> required>
                 </div>
                <div class="form-group">
                    <label for="nomeFantasia">Nome da Empresa</label>
                    <input type="text" class="form-control" name="nomeFantasia" placeholder="Nome da Empresa" value= <?php echo $Sessao::retornaValorFormulario('nomeFantasia'); ?> required>
                 </div>

            <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" placeholder="CNPJ da Empresa" value="<?php echo $Sessao::retornaValorFormulario('cnpj'); ?>" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereco</label>
                <input type="text" class="form-control" name="endereco" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('cnpj'); ?>" required>
            </div>

            <div class="form-group">
                <label for="inscricaoEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscricaoEstadual" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('inscricaoEstadual'); ?>" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
            </div>    
            
            <div class="form-group">
                <label for="tipoDeServico">Tipo de Serviço</label>
                <input type="text" class="form-control" name="tipoDeServico" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('tipoDeServico'); ?>" required>
            </div>

           
           

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
    </div>
    <div class="col-md-3"></div>
    </div>
</div>