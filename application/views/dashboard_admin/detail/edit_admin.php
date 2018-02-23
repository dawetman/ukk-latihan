<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($admin as $a) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_admin" method="POST">
        <div class="box-body">
          <input type="hidden" name="id_admin" value="<?php echo $a->id_admin ?>">
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="form-control" name="email" type="text" value="<?php echo $a->email ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="username" type="text" value="<?php echo $a->username ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-key"></i>
              </span>
              <input class="form-control" name="password" type="password" value="<?php echo $a->password ?>">
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