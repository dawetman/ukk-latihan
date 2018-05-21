<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Reservasi
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-header">
        <h3 class="box-title">Data Reservasi</h3>
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
            <th>Kode Reservasi</th>
            <th>Kode Rute</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($reservasi as $r) { ?>
          <tr>
            <td class="col col-md-3"><?php echo $r->id_reservasi ?></td>
            <td class="col col-md-3"><?php echo $r->id_rute ?></td>
            <td class="col col-md-2"><?php echo $r->date_flight ?></td>
            <td class="col col-md-2"><?php echo $r->status ?></td>
            <td class="col col-md-2">
              <a href="<?php echo base_url('Dashboard/v_more_reservasi/').$r->id_reservasi;?>">
                <button class="btn btn-xs btn-warning">Detail</button>
              </a>
              <a href="<?php echo base_url('Dashboard/v_edit_reservasi/').$r->id_reservasi;?>">
                <button class="btn btn-xs btn-success">Konfirmasi</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="box-footer">
      </div>

    </div>
  </section>
</div>