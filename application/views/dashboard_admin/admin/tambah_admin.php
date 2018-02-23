<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_data_admin" method="POST">
        <div class="box-body">
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
            <label>Username</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="username" type="text" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-key"></i>
              </span>
              <input class="form-control" name="password" type="password" placeholder="Password">
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