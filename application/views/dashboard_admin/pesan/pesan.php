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
            <th>Nama</th>
            <th>Email</th>
            <th>Judul Pesan</th>
            <th>Aksi</th>
          </tr>
          <?php foreach($pesan as $pes) { ?>
          <tr>
            <td class="col col-md-3"><?php echo $pes->name ?></td>
            <td class="col col-md-3"><?php echo $pes->email ?></td>
            <td class="col col-md-2"><?php echo $pes->subject ?></td>
            <td class="col col-md-1 pull-middle">
              <a href="<?php echo base_url('Dashboard/v_more_pesan/').$pes->id_pesan;?>">
                <button class="btn btn-xs btn-warning">Detail</button>
              </a>
              <a href="<?php echo base_url('Dashboard/hapus_pesan/').$pes->id_pesan;?>">
                <button class="btn btn-xs btn-danger">Hapus</button></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
  </section>
</div>