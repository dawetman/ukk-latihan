<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Bandara
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header">
        <h3 class="box-title">Data Pesawat</h3>
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
            <th>Nama Bandara</th>
            <th>Kode Bandara</th>
            <th>Kota</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($bandara as $b) { ?>
          <tr>
            <td class="col col-md-3"><?php echo $b->name ?></td>
            <td class="col col-md-3"><?php echo $b->code ?></td>
            <td class="col col-md-2"><?php echo $b->city ?></td>
            <td class="col col-md-1">
              <a href="<?php echo base_url('Dashboard/v_edit_data_bandara/').$b->id_bandara;?>">
                <button class="btn btn-xs btn-warning">Edit</button>
              </a>
              <a href="<?php echo base_url('Dashboard/hapus_data_bandara/').$b->id_bandara;?>">
                <button class="btn btn-xs btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="box-footer">
        <a href="<?php echo base_url() ?>Dashboard/v_tambah_data_bandara"><button class="btn bg-gray pull-right">Tambah Data</button></a>
      </div>

    </div>
  </section>
</div>