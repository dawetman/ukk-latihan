<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($user as $u) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_data_pelanggan" method="POST">
        <div class="box-body">
          <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="form-control" name="email" type="text" value="<?php echo $u->email ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="username" type="text" value="<?php echo $u->username ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-key"></i>
              </span>
              <input class="form-control" name="password" type="password" value="<?php echo $u->password ?>">
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