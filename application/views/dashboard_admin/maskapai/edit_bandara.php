<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Bandara
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($bandara as $b) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_data_bandara" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Bandara</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name="code" type="text" value="<?php echo $b->id_bandara ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label>Nama Bandara</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="name" type="text" value="<?php echo $b->name ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-home"></i>
              </span>
              <input class="form-control" name="city" type="text" value="<?php echo $b->city ?>">
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