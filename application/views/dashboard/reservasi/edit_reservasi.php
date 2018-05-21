<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($reservasi as $r) { ?>
      <div class="box-header">
        <h3 class="box-title">Konfirmasi Reservasi</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <a href="<?php echo base_url('Dashboard/hapus_reservasi/').$r->id_reservasi;?>">
              <button class="btn btn-danger pull-right">Hapus</button>
            </a>
          </div>
        </div>
      </div>

      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_reservasi" method="POST">
        <div class="box-body">
          <input type="hidden" name="id_reservasi" value="<?php echo $r->id_reservasi ?>">
          <div class="form-group">
            <label>Status</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-flag"></i>
              </span>
              <select class="form-control" name="status">
                <option value="Menunggu">Menunggu</option>
                <option value="Diterima">Diterima</option>
                <option value="Dibatalkan">Dibatalkan</option>
              </select>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-gray">Konfirmasi</button>
          </div>
        </div>
      </form>
      <?php } ?>
    </div>
  </section>
</div>
