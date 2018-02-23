<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data Bandara
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_data_bandara" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Bandara</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name="code" type="text" placeholder="Kode Bandara">
            </div>
          </div>
          <div class="form-group">
            <label>Nama Bandara</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="name" type="text" placeholder="Nama Bandara">
            </div>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-asterisk"></i>
              </span>
              <input class="form-control" name="city" type="text" placeholder="city">
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