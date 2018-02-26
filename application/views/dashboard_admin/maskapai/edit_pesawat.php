<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Pesawat
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($pesawat as $p) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_data_pesawat" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name='id_pesawat' type="text" value="<?php echo $p->id_pesawat ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label>Nama Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="name" type="text" value="<?php echo $p->name ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Detail</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-asterisk"></i>
              </span>
              <input class="form-control" name="detail" type="text" value="<?php echo $p->detail ?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-gray">Simpan</button>
          </div>
        </div>
      </form>
      <?php } ?>

    </div>
  </section>
</div>