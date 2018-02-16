<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box">

        <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_data_maskapai" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Maskapai</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-plane"></i>
                </span>
                <input class="form-control" name="name" type="text" placeholder="Nama Maskapai">
              </div>
            </div>
            <div class="form-group">
              <label>Kursi</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-wheelchair"></i>
                </span>
                <input class="form-control" name="seat" type="text" placeholder="Kursi">
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
    </div>
  </section>
</div>