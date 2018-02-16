<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Rute Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box">

        <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_rute_maskapai" method="POST">
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
              <label>Rute Asal</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-upload"></i>
                </span>
              <input class="form-control" name="route_from" type="text" placeholder="Rute Asal">
            </div>
          </div>
            <div class="form-group">
              <label>Rute Tujuan</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-download"></i>
                </span>
              <input class="form-control" name="route_to" type="text" placeholder="Rute Tujuan">
            </div>
          </div>
            <div class="form-group">
              <label>Keberangkatan</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </span>
              <input class="form-control" name="departure" type="time">
            </div>
          </div>
            <div class="form-group">
              <label>Kedatangan</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </span>
              <input class="form-control" name="arrival" type="time">
            </div>
          </div>
            <div class="form-group">
              <label>Harga</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-money"></i>
                </span>
              <input class="form-control" name="price" type="text" placeholder="Harga">
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