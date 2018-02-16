<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box">

        <?php foreach($pelanggan as $p) { ?>
        <form role="form" action="<?php echo base_url() ?>Dashboard/edit_detail_pelanggan" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $p->id ?>">
            <div class="form-group">
              <label>Email</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </span>
              <input class="form-control" name="email" placeholder="Nama" type="text" value="<?php echo $p->email ?>">
            </div>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                </span>
              <input class="form-control" name="name" placeholder="Nama" type="text" value="<?php echo $p->name ?>">
            </div>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <div class="radio">
                <label><input name="gender" value="L" type="radio" checked value="<?php echo $p->gender ?>">Laki-Laki</label>
              </div>
              <div class="radio">
                <label><input name="gender" value="P" type="radio" value="<?php echo $p->gender ?>">Perempuan</label>
              </div>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-home"></i>
                </span>
              <input class="form-control" name="address" placeholder="Alamat" type="textbox" value="<?php echo $p->address ?>">
            </div>
            </div>
            <div class="form-group">
              <label>No. Telepon</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </span>
              <input class="form-control" name="phone" placeholder="Telepon" type="text" value="<?php echo $p->phone ?>">
            </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn bg-gray">Submit</button>
            </div>
          </div>
        </form>
        <?php } ?>

      </div>
    </div>
  </section>
</div>