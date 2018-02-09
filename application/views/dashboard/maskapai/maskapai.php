<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-xs-12">
      <div class="box box-primary">

        <div class="box-header">
          <h3 class="box-title">Data Maskapai</h3>
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
              <th>Nama Maskapai</th>
              <th>Data Kursi</th>
              <th>Detail</th>
              <th>Aksi</th>
            </tr>
            <?php foreach($maskapai as $m) { ?>
            <tr>
              <td class="col col-md-3"><?php echo $m->name ?></td>
              <td class="col col-md-3"><?php echo $m->seat ?></td>
              <td class="col col-md-2"><?php echo $m->detail ?></td>
              <td class="col col-md-1">
                <a href="<?php echo base_url('User/v_edit_data_maskapai/').$m->id;?>">
                  <button class="btn btn-xs btn-warning">Edit</button>
                </a>
                <a href="<?php echo base_url('User/hapus_data_maskapai/').$m->id;?>">
                  <button class="btn btn-xs btn-danger">Hapus</button></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <a href="<?php echo base_url() ?>User/v_tambah_data_maskapai"><button href="<?php echo base_url() ?>User/v_tambah" class="btn btn-primary pull-right">Tambah Data</button></a>
        </div>

      </div>
    </div>
  </section>
</div>