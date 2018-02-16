<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Rute Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="col-md-12">
      <div class="box">

        <?php foreach($rute as $r) { ?>
        <form role="form" action="<?php echo base_url() ?>Dashboard/edit_rute_maskapai" method="POST">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $r->id ?>">
            <div class="form-group">
              <label>Nama Maskapai</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-plane"></i>
                </span>
                <input class="form-control" name="name" type="text" value="<?php echo $r->name ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Rute Asal</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-upload"></i>
                </span>
                <input class="form-control" name="route_from" type="text" value="<?php echo $r->route_from ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Rute Tujuan</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-download"></i>
                </span>
                <input class="form-control" name="route_to" type="text" value="<?php echo $r->route_to ?>">
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
        </form>
        <?php } ?>

      </div>
    </div>
  </section>
</div>