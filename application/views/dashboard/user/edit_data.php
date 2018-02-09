<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Data
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <?php foreach($user as $u) { ?>
        <form role="form" action="<?php echo base_url() ?>User/edit_data_user" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $u->id ?>">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" name="email" type="text" value="<?php echo $u->email ?>">
            </div>
            <div class="form-group">
              <div class="form-group">
              <label>Username</label>
              <input class="form-control" name="username" type="text" value="<?php echo $u->username ?>">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" name="password" type="password" value="<?php echo $u->password ?>">
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