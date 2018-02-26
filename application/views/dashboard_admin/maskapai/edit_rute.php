<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Rute Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <?php foreach($rute as $r) { ?>
      <form role="form" action="<?php echo base_url() ?>Dashboard/edit_rute_maskapai" method="POST">
        <div class="box-body">
          <div class="form-group">
            <div class="box-body">
              <div class="form-group">
                <label>Kode Rute</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-code"></i>
                  </span>
                  <input class="form-control" name="id_rute" type="text" value="<?php echo $r->id_rute ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label>Kode Maskapai</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-plane"></i>
                  </span>
                  <input class="form-control" name="id_maskapai" type="text" value="<?php echo $r->id_maskapai ?>">
                </div>
              </div>
              <div class="form-group">
                <label>Bandara Asal</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-upload"></i>
                  </span>
                  <select class="form-control" name="id_route_from">
                    <option value="DPS">DPS</option>
                    <option value="HLP">HLP</option>
                    <option value="JOG">JOG</option>
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
                    <option value="DPS">DPS</option>
                    <option value="HLP">HLP</option>
                    <option value="JOG">JOG</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Keberangkatan</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                  <input class="form-control" name="departure" type="time" value="<?php echo $r->departure ?>">
                </div>
              </div>
              <div class="form-group">
                <label>Kedatangan</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                  <input class="form-control" name="arrival" type="time" value="<?php echo $r->arrival ?>">
                </div>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-money"></i>
                  </span>
                  <input class="form-control" name="price" type="text" value="<?php echo $r->price ?>">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn bg-gray">Submit</button>
              </div>
            </div>
          </div>
        </form>
        <?php } ?>

      </div>
    </section>
  </div>