<?php 
$cao = $this->cao_model->ver($id);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">

            <div class="card-body ">
                <h2>Formulário de interesse em adoção</h2>
                <i class="fa fa-paw"></i> <b>Apelido:</b> <?= $cao->cao_apelido; ?><br><hr>
                <form method="post" action="">
                    <input type="hidden" name="for_cao" value="<?= $id; ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input name="for_nome" type="text" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input name="for_endereco" type="text" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input name="for_telefone" type="text" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input name="for_email" type="email" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-group">
                        <label>Observação</label>
                        <textarea name="for_obs" rows="5" class="form-control" required="required"></textarea>
                    </div>

                    <input type="submit" name="enviar" class="btn btn-primary" value="Enviar formulário de interesse">
                </form>
            </div>

            <div class="card-footer ">
            </div>
        </div>
    </div>
</div>