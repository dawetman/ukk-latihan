<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <form role="form" action="<?php echo base_url() ?>User/tambah_detail_user" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" name="name" placeholder="Nama" type="text">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" name="email" placeholder="Nama" type="text">
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
              <input class="form-control" name="address" placeholder="Alamat" type="textbox">
            </div>
            <div class="form-group">
              <label>No. Telepon</label>
              <input class="form-control" name="phone" placeholder="Telepon" type="text">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </section>
</div>