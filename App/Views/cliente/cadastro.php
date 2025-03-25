<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <div class="starter-template">
            <h1>CADASTRO DE CLIENTE</h1>
    </div>


        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
           
            <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
          </div>
         
        </div>
      </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Cliente</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('cpf'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="dataDeNascimento">Data de Nascimentos</label>
                    <input type="date" class="form-control" name="dataDeNascimento" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('dataDeNascimento'); ?>" required>
                </div>


                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>