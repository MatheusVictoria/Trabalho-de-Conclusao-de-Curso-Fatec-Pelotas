
<div class="col-lg-10">

    <div class="col-lg-12">
        <h1>
            Cadastro de Usuários
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>
    <div class="col-lg-12">

        <form method="post" action="<?= base_url('Usuario/cadastrar') ?>" enctype="multipart/form-data">
            <div class="form-group col-lg-6 ">
                <label for="usuario">Usuário:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="senha"/>
            </div>

            <div class="form-group col-lg-6">
                <label for="tipo">Tipo de Usuário:</label>
                <select name="tipo_id" id="tipo_id" class="form-control" >
                    <option> Selecione o tipo de usuário </option>
                    <?php
                    foreach ($tipos as $tipo) {
                        ?>
                        <option value="<?= $tipo->id ?>"> 
                            <?= $tipo->tipo ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-lg-6">
                <label for="ativo">Ativo:</label>
                <select class="form-control" id="ativo">
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>


            <div class="col-lg-12 col-lg-offset-1 ">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary col-lg-4">Enviar</button>
                </div>
                <div class="col-lg-6">
                    <button type="reset" class="btn btn-primary col-lg-4">Limpar</button>
                </div>
            </div>
        </form>                         

    </div>
</div>



