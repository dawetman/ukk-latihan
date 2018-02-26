<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data Pesawat
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_data_pesawat" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name="id_pesawat" type="text" placeholder="Kode Pesawat">
            </div>
          </div>
          <div class="form-group">
            <label>Nama Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="name" type="text" placeholder="Nama Pesawat">
            </div>
          </div>
          <div class="form-group">
            <label>Detail</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-asterisk"></i>
              </span>
              <input class="form-control" name="detail" type="text" placeholder="Detail">
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