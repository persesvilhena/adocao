<?php 
$form = $this->conf->ver_form($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">

            <div class="card-footer ">
            	<br>
                <h2>Deseja cancelar a adoção e remover o formulário de intenção de adoção?</h2>
                <hr>
                <a href="<?= base_url(); ?>painel/ver/<?= $form->for_id; ?>" class="btn btn-outline-primary">voltar</a>
                <div style="float: right;">
	                <form action="" method="post">
	                	<input type="submit" name="enviar" class="btn btn-outline-danger" value="sim, apagar formulário">
	                </form>
                </div>
                
            </div>
        </div>
    </div>
</div>