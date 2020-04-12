<?php 
$form = $this->conf->ver_form($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">

            <div class="card-footer ">
                <br>
                <h2>A adoção foi realizada com sucesso?</h2>
                <hr>
                
                <a href="<?= base_url(); ?>painel/ver/<?= $form->for_id; ?>" class="btn btn-outline-primary">voltar</a>
                <div style="float: right;">
                    <form method="post" action="">
                        <input type="submit" name="enviar" class="btn btn-outline-success" value="sim, a adoção foi realizada com sucesso">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>