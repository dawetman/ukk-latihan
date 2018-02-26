<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Rute Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_rute_maskapai" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Rute</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name="id_rute" type="text" placeholder="Kode Rute">
            </div>
          </div>
          <div class="form-group">
            <label>Kode Maskapai</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="id_maskapai" type="text" placeholder="Kode Maskapai">
            </div>
          </div>
          <div class="form-group">
            <label>Bandara Asal</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-upload"></i>
              </span>
              <select class="form-control" name="id_route_from">
                <?php foreach($data_rute as $data) { ?>
                <option value="<?php echo $data->id_bandara ?>"><?php echo $data->id_bandara ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Bandara Tujuan</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-download"></i>
              </span>
              <select class="form-control" name="id_route_to">
                <?php foreach($data_rute as $data) { ?>
                <option value="<?php echo $data->id_bandara ?>"><?php echo $data->id_bandara ?></option>
                <?php } ?>
              </select>
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
  </section>
</div>