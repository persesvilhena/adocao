<div class="row">
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Inserir Cão</h5>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Apelido</label>
                                <input type="text" class="form-control" placeholder="Apelido" name="cao_apelido" required="required">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Raça</label>
                                <input type="text" class="form-control" placeholder="Raça" name="cao_raca" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observação</label>
                                <textarea class="form-control textarea" name="cao_obs" placeholder="Observação" required="required"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto</label>
                            </div>
                        </div>
                    </div>

                    <input type="file" name="foto" accept="image/png, image/jpeg" required="required">
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= base_url(); ?>painel/caes" class="btn btn-secundary btn-round">Voltar</a>
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