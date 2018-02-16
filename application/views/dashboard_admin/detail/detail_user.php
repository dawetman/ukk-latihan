<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Akun
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="col-xs-6">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Diri</h3>
            </div>

            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
                  <?php foreach($pelanggan as $p) { ?>
                  <tr>
                    <td>Email</td>
                    <td class="col"><?php echo $p->email ?></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td class="col"><?php echo $p->name ?></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td class="col"><?php echo $p->gender ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td class="col"><?php echo $p->address ?></td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td class="col"><?php echo $p->phone ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <a href="<?php echo base_url('Dashboard/v_edit_detail_user/').$p->id;?>">
                  <button class="btn btn-warning">Edit</button>
                </a>
                <a href="<?php echo base_url('Dashboard/hapus_detail_user/').$p->id;?>">
                  <button class="btn btn-danger">Hapus</button>
                </a>
              </div>
            </div>

          </div>
        </div>

        <div class="col-xs-6">

          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Diri</h3>
            </div>

            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
                  <?php foreach($pelanggan as $p) { ?>
                  <tr>
                    <td>Email</td>
                    <td class="col"><?php echo $p->email ?></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td class="col"><?php echo $p->name ?></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td class="col"><?php echo $p->gender ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td class="col"><?php echo $p->address ?></td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td class="col"><?php echo $p->phone ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <a href="<?php echo base_url('Dashboard/v_edit_detail_user/').$p->id;?>">
                  <button class="btn btn-warning">Edit</button>
                </a>
                <a href="<?php echo base_url('Dashboard/hapus_detail_user/').$p->id;?>">
                  <button class="btn btn-danger">Hapus</button>
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </div>