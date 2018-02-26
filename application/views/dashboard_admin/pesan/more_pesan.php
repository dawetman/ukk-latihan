<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Data Pelanggan
    </h1>
  </section>

  <section class="content">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Pelanggan</h3>
      </div>

      <?php foreach($pesan as $pes) { ?>
      <form role="form">
        <div class="box-body">

          <div class="form-group">
            <label>Judul Pesan</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user-secret"></i>
              </span>
              <input class="form-control" name="subject" type="text" value="<?php echo $pes->subject ?>" disabled="">
            </div>
          </div>

          <div class="row">

            <div class="col col-md-6">
              <!-- <input type="hidden" name="id_pelanggan" value="<?php echo $p->id_pelanggan ?>"> -->
              <div class="form-group">
                <label>Dari</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </span>
                  <input class="form-control" name="name" type="text" value="<?php echo $pes->name ?>" disabled="">
                </div>
              </div>
            </div>

            <div class="col col-md-6">
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="email" type="text" value="<?php echo $pes->email ?>" disabled="">
                </div>
              </div>
            </div>

            <div class="col col-md-12">
              <div class="form-group">
                <label>Pesan</label>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <input class="form-control" name="message" type="text" value="<?php echo $pes->message ?>" disabled="">
                </div>
              </div>
            </div>

        </div>
      </div>
    </form>
    <?php } ?>
  </div>

</section>
</div>