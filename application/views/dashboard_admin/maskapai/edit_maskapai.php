<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box">

        <?php foreach($maskapai as $m) { ?>
        <form role="form" action="<?php echo base_url() ?>Dashboard/edit_data_maskapai" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $m->id ?>">
            <div class="form-group">
              <label>Nama Maskapai</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-plane"></i>
                </span>
                <input class="form-control" name="name" type="text" value="<?php echo $m->name ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Kursi</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-wheelchair"></i>
                </span>
                <input class="form-control" name="seat" type="text" value="<?php echo $m->seat ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Detail</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-asterisk"></i>
                </span>
                <input class="form-control" name="detail" type="text" value="<?php echo $m->detail ?>">
              </div>
            </div>
            <div class="box-footer pull-right">
              <button type="submit" class="btn bg-gray">Simpan</button>
            </div>
          </div>
        </form>
        <?php } ?>

      </div>
    </div>
  </section>
</div>