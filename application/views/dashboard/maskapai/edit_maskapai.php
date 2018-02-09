<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <?php foreach($maskapai as $m) { ?>
        <form role="form" action="<?php echo base_url() ?>User/edit_data_maskapai" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $m->id ?>">
            <div class="form-group">
              <label>Nama Maskapai</label>
              <input class="form-control" name="name" type="text" value="<?php echo $m->name ?>">
            </div>
            <div class="form-group">
              <div class="form-group">
              <label>Kursi</label>
              <input class="form-control" name="seat" type="text" value="<?php echo $m->seat ?>">
            <div class="form-group">
              <label>Detail</label>
              <input class="form-control" name="detail" type="text" value="<?php echo $m->detail ?>">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
        <?php } ?>

      </div>
    </div>
  </section>
</div>