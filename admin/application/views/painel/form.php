<div class="row">
<div class="col-md-12">
  <?= $this->conf->get_alertas(); ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Formulários para adoção recebidos</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Cão
                      </th>
                      <th>
                        Pessoa
                      </th>
                      <th>
                        Ver
                      </th>
                    </tr></thead>
                    <tbody>
                    	<?php foreach ($this->conf->forms() as $n) { ?>
                    		<tr>
		                        <td>
		                        	<?= $n->cao_apelido; ?>
		                        </td>
		                        <td>
		                        	<?= $n->for_nome; ?>
		                        </td>
		                        <td>
		                        	<a href="<?= base_url(); ?>painel/ver/<?= $n->for_id; ?>" class="btn btn-outline-primary">Ver</a>
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
