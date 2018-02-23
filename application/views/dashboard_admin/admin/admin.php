<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Admin
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header">
        <h3 class="box-title">Data Admin</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>

      <div class="box-body table-responsive no-padding">
        <table class="table">
          <tbody><tr>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($admin as $a) { ?>
          <tr>
            <td class="col col-md-3"><?php echo $a->email ?></td>
            <td class="col col-md-3"><?php echo $a->username ?></td>
            <td class="col col-md-2"><?php echo $a->password ?></td>
            <td class="col col-md-1">
              <a href="<?php echo base_url('Dashboard/v_edit_data_admin/').$a->id_admin;?>">
                <button class="btn btn-xs btn-warning">Edit</button>
              </a>
              <a href="<?php echo base_url('Dashboard/hapus_data_admin/').$a->id_admin;?>">
                <button class="btn btn-xs btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="box-footer">
        <a href="<?php echo base_url() ?>Dashboard/v_tambah_data_admin"><button class="btn bg-gray pull-right">Tambah Data</button></a>
      </div>

    </div>
  </section>
</div>