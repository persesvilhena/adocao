<div class="row">
    <?php foreach ($this->cao_model->busca($par) as $n) {?>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <img src="<?= $n->cao_foto; ?>" style="width: 100%; height: 250px;" class="rounded-circle">
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-paw"></i> <?= $n->cao_apelido; ?><br>
                  <i class="fa fa-bone"></i> <?= $n->cao_raca; ?><br>
                  <center>
                    <a href="<?= base_url(); ?>home/ver/<?= $n->cao_id; ?>" class="btn btn-outline-secundary">Visualizar</a>
                  </center>
                </div>
              </div>
            </div>
        </div>
    <?php } ?>
</div>