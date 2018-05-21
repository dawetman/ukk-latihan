<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">

    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_detail_pelanggan" method="POST">
        <div class="box-body">

          <div class="form-group">
            <label>Alias</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="form-control" name="alias" type="text" placeholder="Alias">
            </div>
          </div>

          <div class="row">

            <div class="col col-md-6">
              <input type="hidden" name="id_pelanggan">
              <div class="form-group">
                <label>No. Identitas</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="id_card" type="text" placeholder="KTP / SIM / NIM">
                </div>
              </div>
              <div class="form-group">
                <label>Nama Depan</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="name_f" type="text" placeholder="Nama Depan">
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="input-group">
                  <div class="radio">
                    <label class="col-md-6">
                      <input name="gender" value="Laki-Laki" checked="" type="radio">
                      Laki-Laki
                    </label>
                    <label class="col-md-6">
                      <input name="gender" value="Perempuan" type="radio">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="address" type="textbox" placeholder="Alamat">
                </div>
              </div>
              <div class="form-group">
                <label>City</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="city" type="text" placeholder="Kota">
                </div>
              </div>
            </div>

            <div class="col col-md-6">
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="email" type="text" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label>Nama Belakang</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="name_b" type="text" placeholder="Nama Belakang">
                </div>
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="phone" type="text" placeholder="No. Telepon">
                </div>
              </div>
              <div class="form-group">
                <label>Kode Pos</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="zip" type="text" placeholder="Kode Pos">
                </div>
              </div>
              <div class="form-group">
                <label>Negara</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-flag"></i>
                  </span>
                  <select class="form-control" name="country">
                    <option value="Indonesia">Indonesia</option>
                  </select>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn bg-gray pull-right">Simpan</button>
        </div>
      </form>
    </div>

  </section>
</div>