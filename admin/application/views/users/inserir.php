<div class="row">
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Inserir usuário</h5>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Login</label>
                                <input type="text" class="form-control" placeholder="Login" name="login" required="required">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control" placeholder="Senha" name="senha" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="E-mail" name="email" required="required">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= base_url(); ?>painel/users" class="btn btn-secundary btn-round">Voltar</a>
                            <div style="float: right;">
                                <input type="submit" class="btn btn-success btn-round" name="enviar" value="Inserir">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>