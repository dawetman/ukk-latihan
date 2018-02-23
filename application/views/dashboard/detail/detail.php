<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data User
    </h1>
  </section>

  <section class="content">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data User</h3>
      </div>

      <?php foreach($user as $u) { ?>
      <form role="form">
        <div class="box-body">
          <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="form-control" name="email" type="text" value="<?php echo $u->email ?>" disabled="">
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="username" type="text" value="<?php echo $u->username ?>" disabled="">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-key"></i>
              </span>
              <input class="form-control" name="password" type="text" value="<?php echo $u->password ?>" disabled="">
            </div>
          </div>
        </div>
      </form>
      <div class="box-footer">
        <a href="<?php echo base_url('User/v_edit_user/').$u->id_user;?>"><button class="btn bg-gray pull-right">Ubah</button></a>
      </div>
      <?php } ?>
    </div>

  </section>
</div>