<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <?php foreach($pelanggan as $p) { ?>
        <form role="form" action="<?php echo base_url() ?>User/edit_detail_user" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $p->id ?>">
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" name="name" type="text" value="<?php echo $p->name ?>">
            </div>
            <div class="form-group">
              <div class="form-group">
              <label>Email</label>
              <input class="form-control" name="email" type="text" value="<?php echo $p->email ?>">
            </div>
              <label>Jenis Kelamin</label>
              <div class="radio" active>
                <label><input name="gender" value="L" type="radio" checked>Laki-Laki</label>
              </div>
              <div class="radio">
                <label><input name="gender" value="P" type="radio">Perempuan</label>
              </div>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input class="form-control" name="address" type="textbox" value="<?php echo $p->address ?>">
            </div>
            <div class="form-group">
              <label>No. Telepon</label>
              <input class="form-control" name="phone" type="text" value="<?php echo $p->phone ?>">
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