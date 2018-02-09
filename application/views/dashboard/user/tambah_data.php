<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <form role="form" action="<?php echo base_url() ?>User/tambah_data_user" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" name="email" type="text>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" name="username" type="text">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" name="password" type="password">
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