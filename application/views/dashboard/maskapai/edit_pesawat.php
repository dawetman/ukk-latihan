<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data Pesawat
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <?php foreach($pesawat as $p) { ?>
        <form role="form" action="<?php echo base_url() ?>User/edit_data_pesawat" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $p->id ?>">
            <div class="form-group">
              <label>Kode Pesawat</label>
              <input class="form-control" name="code" type="text" value="<?php echo $p->code ?>">
            </div>
            <div class="form-group">
              <div class="form-group">
              <label>Nama Pesawat</label>
              <input class="form-control" name="name" type="text" value="<?php echo $p->name ?>">
            <div class="form-group">
              <label>Detail</label>
              <input class="form-control" name="detail" type="text" value="<?php echo $p->detail ?>">
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