<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="box box">

      <?php foreach($maskapai as $m) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_data_maskapai" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Maskapai</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="name" type="text" value="<?php echo $m->id_maskapai ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label>Nama Maskapai</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-wheelchair"></i>
              </span>
              <input class="form-control" name="seat" type="text" value="<?php echo $m->name ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Kode Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-asterisk"></i>
              </span>
              <input class="form-control" name="detail" type="text" value="<?php echo $m->id_pesawat ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-asterisk"></i>
              </span>
              <input class="form-control" name="class" type="text" value="<?php echo $m->class ?>">
            </div>
          </div>
          <div class="box-footer pull-right">
            <button type="submit" class="btn bg-gray">Simpan</button>
          </div>
        </div>
      </form>
      <?php } ?>

    </div>
  </section>
</div>