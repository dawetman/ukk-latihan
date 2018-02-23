<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Pelanggan
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header">
        <h3 class="box-title">Detail Pelanggan</h3>
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
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Np. Telepon</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($pelanggan as $p) { ?>
          <tr>
            <td class="col col-md-2"><?php echo $p->email ?></td>
            <td class="col col-md-2"><?php echo $p->name ?></td>
            <td class="col col-md-1"><?php echo $p->gender ?></td>
            <td class="col col-md-2"><?php echo $p->address ?></td>
            <td class="col col-md-1"><?php echo $p->phone ?></td>
            <td class="col col-md-1 pull-middle">
              <a href="<?php echo base_url('Dashboard/v_edit_detail_pelanggan/').$p->id_pelanggan;?>">
                <button class="btn btn-xs btn-warning">Edit</button>
              </a>
              <a href="<?php echo base_url('Dashboard/hapus_detail_pelanggan/').$p->id_pelanggan;?>">
                <button class="btn btn-xs btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="box-footer">
        <a href="<?php echo base_url() ?>Dashboard/v_tambah_detail_pelanggan"><button class="btn bg-gray pull-right">Tambah Data</button></a>
      </div>

    </div>
  </section>
</div>