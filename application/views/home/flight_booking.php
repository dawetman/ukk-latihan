<div class="page-title-container">
	<div class="container yellow">
		<div class="page-title pull-left">
			<h2 class="entry-title">Detail Penerbangan</h2>
		</div>
		<ul class="breadcrumbs pull-right">
			<li><a href="#">HOME</a></li>
			<li class="active">Detail Penerbangan</li>
		</ul>
	</div>
</div>

<section id="content" class="gray-area">
	<div class="container">
		<div class="row">

			<div id="main" class="col-sms-6 col-sm-8 col-md-9">
				<div class="booking-section jalanyuk-box">

					<form class="booking-form" onsubmit="submition(event)" method="post" action="<?= base_url()?>Home/flight_checkout">

						<?php
						for ($i=0; $i < $this->input->post('jumlah_tiket') ; $i++) {
							print('
								<div class="person-information">

								<h2>Identitas Anda</h2>
								<input type="hidden" name="id_booking[]" value="'.random_string("alnum",10).'">
								<div class="form-group row">
								<div class="col-sm-6 col-md-6">
								<label>No. Identitas (KTP / SIM / Kartu Mahasiswa)</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="id_card[]"/>
								</div>
								<div class="col-sm-6 col-md-6">
								<label>Email</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="email[]"/>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 col-md-6">
								<label>Nama Depan</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="name_f[]"/>
								</div>
								<div class="col-sm-6 col-md-6">
								<label>Nama Belakang</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="name_b[]"/>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 col-md-6">
								<label>Jenis Kelamin</label>
								<div class="selector">
								<select class="full-width" name="gender[]">
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
								</select>
								</div>
								</div>
								<div class="col-sm-6 col-md-6">
								<label>No. Telepon</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="phone[]"/>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 col-md-6">
								<label>Alamat</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="address[]"/>
								</div>
								<div class="col-sm-6 col-md-6">
								<label>Kode Pos</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="zip[]"/>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 col-md-6">
								<label>Kota</label>
								<input type="text" class="input-text full-width" value="" placeholder="" required="" name="city[]"/>
								</div>
								<div class="col-sm-6 col-md-6">
								<label>Negara</label>
								<div class="selector">
								<select class="full-width" name="country[]">
								<option value="Indonesia">Indonesia</option>
								</select>
								</div>
								</div>
								</div>
								</div>
								');
						}
						?>

						<div class="seperator"><br/></div>

						<h2>Tiket Anda</h2>
						<div class="form-group row">
							<input type="hidden" name="id_reservasi" value="<?php echo(random_string("alnum",10)) ?>">
							<input type="hidden" value="<?php echo $this->session->userdata("username"); ?>" name="username">
							<input type="hidden" value="<?php echo $harga ?>" name="price">
							<input type="hidden" value="Menunggu" name="status">
							<div class="col-md-6">
								<label>Kode Penerbangan</label>
								<input type="text" class="input-text full-width" value="<?= $id_rute ?>" placeholder="" name="id_rute" readonly/>
							</div>
							<div class="col-md-6">
								<label>Tanggal Berangkat</label>
								<input type="text" class="input-text full-width" value="<?= $tanggal ?>" placeholder="" name="date_flight" readonly/>
							</div>
						</div>
						<div id="input-seat"></div>
						<div class="form-group row">
							<div class="col-md-12">
								<label>Pilih Kursi</label>
								<div id="seat" class="full-width margin-top-10">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" required=""> Dengan ini, saya setuju dengan<a href="#"><span class="skin-color"> Syarat dan Ketentuan</span></a> yang berlaku.
								</label>
							</div>
						</div>

						<div class="seperator"><br/></div>

						<div class="form-group row">
							<div class="col-sm-6 col-md-6">
								<button type="submit" class="full-width btn-large dark-blue1">PESAN TIKET</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="sidebar col-sms-6 col-sm-4 col-md-3">
				<div class="booking-details jalanyuk-box">
					<h4>Detail Penerbangan</h4>
					<article class="detailed-logo">
						<figure>
							<img src="http://localhost/ukk/assets/dist/images/flight/<?php echo $detail->logo ?> " alt="">
						</figure>
						<div class="details">
							<div class="travel-title">
								<h5 class="box-title"><?php echo $detail_from->city ?> - <?php echo $detail_to->city ?><small><?php echo $detail->maskapai_name ?> (<?php echo $detail->maskapai_class ?>)</small></h5>
							</div>
							<div class="constant-column-3 timing clearfix">
								<div class="check-in">
									<label>Berangkat</label>
									<span><?= $tanggal ?><br><?php echo $detail->departure ?></span>
								</div>
								<div class="duration text-center">
									<i class="soap-icon-clock"></i>
									<span>Waktu</span>
								</div>
								<div class="check-out">
									<label>Mendarat</label>
									<span><?= $tanggal ?><br><?php echo $detail->arrival ?></span>
								</div>
							</div>
							<div class="separator"><br/></div>
							<div class="constant-column-3">
								<a href="http://localhost/ukk/Home/flight_search?id_route_from=<?= $detail->id_route_from?>&id_route_to=<?= $detail->id_route_to?>" class="button dark-blue1 full-width uppercase btn-medium">UBAH</a>
							</div>
						</div>
					</article>

					<h4>Other Details</h4>
					<dl class="other-details">
						<dt class="feature">Dari</dt><dd class="value"><?php echo $detail_from->name ?></dd>
						<dt class="feature">Ke</dt><dd class="value"><?php echo $detail_to->name ?></dd>
						<dt class="feature">Maskapai</dt><dd class="value"><?php echo $detail->maskapai_name ?></dd>
						<dt class="feature">Kelas</dt><dd class="value"><?php echo $detail->maskapai_class ?></dd>
						<dt class="total-price">Harga Tiket</dt><dd class="total-price-value">Rp. <?php echo $harga ?></dd>
					</dl>
				</div>

			</div>

		</div>
	</div>
</section>

<script src="<?php echo base_url() ?>assets/dist/js/seat.js"></script>
<script type="text/javascript">
	var maxBook = <?= $this->input->post('jumlah_tiket') ?>;
	var book = <?= $this->input->post('jumlah_tiket') ?>;
	var booked = [];

	<?php
	$this->load->model('M_home');
	$booked = $this->M_home->tampil_seat($id_rute, $tanggal)->result();
	foreach ($booked as $value) 
		{ 
			echo "booked.push('".$value->seat."');";
		}
	?>

	seat(<?php echo $detail->seat ?>,booked);

	function submition(e)
	{
		if (book != 0)
		{
			alert('Pilih ' + maxBook + ' kursi!');
			e.preventDefault();
		}
		else
		{
			var seat;
			for (var i = 0; i < maxBook; i++)
			{
				seat = $('.selected').eq(i).attr('id');
				$('#input-seat').append("<input type='hidden' name='seat[]' value='"+seat+"'>")
			}
		}
	}
</script>