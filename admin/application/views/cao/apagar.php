<?php 
$form = $this->conf->ver_cao($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">

            <div class="card-footer ">
            	<br>
                <h2>Deseja apagar o cão?</h2>
                <hr>
                <a href="<?= base_url(); ?>painel/caes" class="btn btn-outline-primary">voltar</a>
                <div style="float: right;">
	                <form action="" method="post">
	                	<input type="submit" name="enviar" class="btn btn-outline-danger" value="sim, apagar o cão">
	                </form>
                </div>
                
            </div>
        </div>
    </div>
</div>