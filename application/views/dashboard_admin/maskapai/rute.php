<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Rute Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header">
        <h3 class="box-title">Rute Maskapai</h3>
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
            <th>Rute Asal</th>
            <th>Rute Tujuan</th>
            <th>Keberangkatan</th>
            <th>Kedatangan</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($rute as $r) { ?>
          <tr>
            <td class="col col-md-2"><?php echo $r->name ?></td>
            <td class="col col-md-2"><?php echo $r->route_from ?></td>
            <td class="col col-md-2"><?php echo $r->route_to ?></td>
            <td class="col col-md-2"><?php echo $r->departure ?></td>
            <td class="col col-md-2"><?php echo $r->arrival ?></td>
            <td class="col col-md-1"><?php echo $r->price ?></td>
            <td class="col col-md-3 text-center">
              <a href="<?php echo base_url('Dashboard/v_edit_rute_maskapai/').$r->id_rute;?>">
                <button class="btn btn-xs btn-warning">Edit</button>
              </a>
              <a href="<?php echo base_url('Dashboard/hapus_rute_maskapai/').$r->id_rute;?>">
                <button class="btn btn-xs btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="box-footer">
        <a href="<?php echo base_url() ?>Dashboard/v_tambah_rute_maskapai"><button class="btn bg-gray pull-right">Tambah Data</button></a>
      </div>

    </div>
  </section>
</div>