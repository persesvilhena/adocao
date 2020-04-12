<div class="row">
<div class="col-md-12">
  <?= $this->conf->get_alertas(); ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Usuários
                  <div style="float: right;">
                    <a href="<?= base_url(); ?>painel/inserir_user" class="btn btn-outline-success">Inserir</a>
                  </div>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Login
                      </th>
                      <th>
                        E-mail
                      </th>
                      <th>
                        Apagar
                      </th>
                    </tr></thead>
                    <tbody>
                    	<?php foreach ($this->conf->users() as $n) { ?>
                    		<tr>
		                        <td>
		                        	<?= $n->login; ?>
		                        </td>
		                        <td>
		                        	<?= $n->email; ?>
		                        </td>
		                        <td>
                              <a href="<?= base_url(); ?>painel/apagar_user/<?= $n->id; ?>" class="btn btn-outline-danger">Apagar</a>
		                        </td>
		                    </tr>
                    	<?php } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>
