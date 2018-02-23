<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>User/tambah_data_diri" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="form-control" name="email" placeholder="Email" type="text">
            </div>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="name" placeholder="Nama" type="text">
            </div>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio">
              <label><input name="gender" value="L" type="radio">Laki-Laki</label>
            </div>
            <div class="radio">
              <label><input name="gender" value="P" type="radio">Perempuan</label>
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-home"></i>
              </span>
              <input class="form-control" name="address" placeholder="Alamat" type="textbox">
            </div>
          </div>
          <div class="form-group">
            <label>No. Telepon</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-phone"></i>
              </span>
              <input class="form-control" name="phone" placeholder="Telepon" type="text">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-gray">Submit</button>
          </div>
        </div>
      </form>

    </div>
  </section>
</div>