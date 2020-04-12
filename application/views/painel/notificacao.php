<div class="row">
    <?php foreach ($this->conf->notificacao() as $n) {?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-stats">
              <div class="card-body ">
                <?= $n->not_desc; ?>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="fa fa-calendar-alt"></i> <?php echo date("H:i:s d/m/Y", strtotime($n->not_data)); ?>
                </div>
              </div>
            </div>
        </div>
    <?php } ?>
</div>