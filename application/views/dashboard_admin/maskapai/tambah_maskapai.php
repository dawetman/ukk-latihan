<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Data Maskapai
    </h1>
  </section>

  <section class="content">
    <div class="box">

      <form role="form" action="<?php echo base_url() ?>Dashboard/tambah_data_maskapai" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label>Kode Maskapai</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>
              <input class="form-control" name="id_maskapai" type="text" placeholder="Kode Maskapai">
            </div>
          </div>
          <div class="form-group">
            <label>Nama Maskapai</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>
              <input class="form-control" name="name" type="text" placeholder="Nama Maskapai">
            </div>
          </div>
          <div class="form-group">
            <label>Kode Pesawat</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-plane"></i>
              </span>
              <input class="form-control" name="id_pesawat" type="text" placeholder="Kode Pesawat">
            </div>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-wheelchair"></i>
              </span>
              <select class="form-control" name="class" type="text">
                <option value="Regular">Regular</option>
                <option value="Executive">Executive</option>
              </select>
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