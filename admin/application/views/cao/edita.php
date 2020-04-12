<?php 
$cao = $this->conf->ver_cao($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Editar Cão</h5>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Apelido</label>
                                <input type="text" class="form-control" placeholder="Apelido" name="cao_apelido" value="<?= $cao->cao_apelido; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Raça</label>
                                <input type="text" class="form-control" placeholder="Raça" name="cao_raca" value="<?= $cao->cao_raca; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observação</label>
                                <textarea class="form-control textarea" name="cao_obs"><?= $cao->cao_obs; ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= base_url(); ?>painel/caes" class="btn btn-secundary btn-round">Voltar</a>
                            <div style="float: right;">
                                <input type="submit" class="btn btn-success btn-round" name="enviar" value="Alterar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>