<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Fornecedor</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/fornecedor/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="telefone" class="form-control" name="telefone" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="id" class="form-control" name="id" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('id'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereco</label>
                    <input type="endereco" class="form-control" name="endereco" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('endereco'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="cnpj">cnpj</label>
                    <input type="cnpj" class="form-control" name="cnpj" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('cnpj'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>