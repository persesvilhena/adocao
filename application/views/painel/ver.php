<?php 
$cao = $this->cao_model->ver($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card-body ">
                        <img src="<?= $cao->cao_foto; ?>" style="width: 100%; height: 250px;" class="rounded-circle">
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="card-footer ">
                <hr>

                <i class="fa fa-paw"></i> <b>Apelido:</b> <?= $cao->cao_apelido; ?><br><br>
                <i class="fa fa-address-card"></i> <b>Raça:</b> <?= $cao->cao_raca; ?><br><br>
                <i class="fa fa-align-center"></i> <b>Observação:</b> <?= $cao->cao_obs; ?><br><br>
                <center>
                <a href="<?= base_url(); ?>home/form/<?= $cao->cao_id; ?>" class="btn btn-outline-secundary">Formulário para adoção</a>
                </center>
            </div>
        </div>
    </div>
</div>