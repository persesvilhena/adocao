<?php 
$form = $this->conf->ver_form($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card-body ">
                        <img src="<?= $form->cao_foto; ?>" style="width: 100%; height: 250px;" class="rounded-circle">
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="card-footer ">
                <hr>
                <h2>Dados do cão:</h2>
                <i class="fa fa-paw"></i> <b>Apelido:</b> <?= $form->cao_apelido; ?><br><br>
                <i class="fa fa-address-card"></i> <b>Raça:</b> <?= $form->cao_raca; ?><br><br>
                <i class="fa fa-align-center"></i> <b>Observação:</b> <?= $form->cao_obs; ?><br><br>
                <hr>
                <h2>Dados do candidato a adoção:</h2>
                <i class="fa fa-user"></i> <b>Nome:</b> <?= $form->for_nome; ?><br><br>
                <i class="fa fa-address-card"></i> <b>Endereço:</b> <?= $form->for_endereco; ?><br><br>
                <i class="fa fa-address-card"></i> <b>Telefone:</b> <?= $form->for_telefone; ?><br><br>
                <i class="fa fa-address-card"></i> <b>E-mail:</b> <?= $form->for_email; ?><br><br>
                <i class="fa fa-align-center"></i> <b>Observação:</b> <?= $form->for_obs; ?><br><br>
                <center>
                <a href="<?= base_url(); ?>painel/form" class="btn btn-outline-primary">voltar</a>
                <a href="<?= base_url(); ?>painel/apaga_form/<?= $form->for_id; ?>" class="btn btn-outline-danger">apagar formulário</a>
                <a href="<?= base_url(); ?>painel/adota_form/<?= $form->for_id; ?>" class="btn btn-outline-success">adoção realizada</a>
                </center>
            </div>
        </div>
    </div>
</div>