<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Data Pelanggan
    </h1>
  </section>

  <section class="content">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Pelanggan</h3>
      </div>

      <?php foreach($pelanggan as $p) { ?>
      <form role="form">
        <div class="box-body">

          <div class="form-group">
            <label>Alias</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user-secret"></i>
              </span>
              <input class="form-control" name="alias" type="text" value="<?php echo $p->alias ?>" disabled="">
            </div>
          </div>

          <div class="row">

            <div class="col col-md-6">
              <!-- <input type="hidden" name="id_pelanggan" value="<?php echo $p->id_pelanggan ?>"> -->
              <div class="form-group">
                <label>No. Identitas</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-asterisk"></i>
                  </span>
                  <input class="form-control" name="id_card" type="text" value="<?php echo $p->id_card ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Nama Depan</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  <input class="form-control" name="name_f" type="text" value="<?php echo $p->name_f ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-mars"></i>
                  </span>
                  <input class="form-control" name="gender" type="text" value="<?php echo $p->gender ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-road"></i>
                  </span>
                  <input class="form-control" name="address" type="textbox" value="<?php echo $p->address ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>City</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-home"></i>
                  </span>
                  <input class="form-control" name="city" type="text" value="<?php echo $p->city ?>" disabled="">
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
                  <input class="form-control" name="email" type="text" value="<?php echo $p->email ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Nama Belakang</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  <input class="form-control" name="name_b" type="text" value="<?php echo $p->name_b ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </span>
                  <input class="form-control" name="phone" type="text" value="<?php echo $p->phone ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Kode Pos</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-code"></i>
                  </span>
                  <input class="form-control" name="zip" type="text" value="<?php echo $p->zip ?>" disabled="">
                </div>
              </div>
              <div class="form-group">
                <label>Negara</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-flag"></i>
                  </span>
                  <input class="form-control" name="country" type="text" value="<?php echo $p->country ?>" disabled="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </form>
      <div class="box-footer">
        <a href="<?php echo base_url('User/v_edit_data_diri/').$p->id_pelanggan;?>"><button class="btn bg-gray pull-right">Ubah</button></a>
      </div>
      <?php } ?>
    </div>

  </section>
</div>