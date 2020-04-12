<div class="row">
<div class="col-md-12">
  <?= $this->conf->get_alertas(); ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Cães
                  <div style="float: right;">
                    <a href="<?= base_url(); ?>painel/inserir_cao" class="btn btn-outline-success">Inserir</a>
                  </div>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Cão
                      </th>
                      <th>
                        Raça
                      </th>
                      <th>
                        Observação
                      </th>
                      <th>
                        Editar
                      </th>
                    </tr></thead>
                    <tbody>
                    	<?php foreach ($this->conf->caes() as $n) { ?>
                    		<tr>
		                        <td>
		                        	<?= $n->cao_apelido; ?>
		                        </td>
		                        <td>
		                        	<?= $n->cao_raca; ?>
		                        </td>
                            <td>
                              <?= $n->cao_obs; ?>
                            </td>
		                        <td>
		                        	<a href="<?= base_url(); ?>painel/edita_cao/<?= $n->cao_id; ?>" class="btn btn-outline-primary">Editar</a>
                              <a href="<?= base_url(); ?>painel/apagar_cao/<?= $n->cao_id; ?>" class="btn btn-outline-danger">Apagar</a>
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
