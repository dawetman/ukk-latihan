<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data Pesawat
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box box-primary">

        <form role="form" action="<?php echo base_url() ?>User/tambah_data_pesawat" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Kode Pesawat</label>
              <input class="form-control" name="code" type="text">
            </div>
            <div class="form-group">
              <label>Nama Pesawat</label>
              <input class="form-control" name="name" type="text">
            <div class="form-group">
              <label>Detail</label>
              <input class="form-control" name="detail" type="text">
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