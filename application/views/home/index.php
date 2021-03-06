<div id="slideshow">
	<div class="fullwidthbanner-container">
		<div class="revolution-slider" style="height: 0; overflow: hidden;">
			<ul>    <!-- SLIDE  -->
				<!-- Slide1 -->
				<li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url() ?>assets/dist/images/flight/plane1_wide.png" alt="">
				</li>

				<!-- Slide2 -->
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url() ?>assets/dist/images/flight/plane2_wide.png" alt="">
				</li>

				<!-- Slide3 -->
				<li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
					<img src="<?php echo base_url() ?>assets/dist/images/flight/plane3_wide.png" alt="">
				</li>
			</ul>
		</div>
	</div>
</div>

<section id="content">
	<div class="search-box-wrapper">
		<div class="search-box container">
			<ul class="search-tabs clearfix">
				<li class="active"><a href="#flights-tab" data-toggle="tab">Cari Jadwal Pesawat</a></li>
			</ul>
			<div class="visible-mobile">
				<ul id="mobile-search-tabs" class="search-tabs clearfix">
					<li class="active"><a href="#flights-tab" data-toggle="tab">Cari Jadwal Pesawat</a></li>
				</ul>
			</div>
			<div class="search-tab-content">
				<form action="<?php echo base_url() ?>Home/flight_search" method="get">
					<div class="row">

						<div class="col-md-3">
							<div class="form-grou full-widthp">
								<label>Darimana?</label>
								<div class="selector">
									<select class="full-width" name="id_route_from">
										<?php foreach($route_from as $f) { ?>
										<option value="<?php echo $f->id_route_from ?>"><?php echo $f->city ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-grou full-widthp">
								<label>Kemana?</label>
								<div class="selector">
									<select class="full-width" name="id_route_to">
										<?php foreach($route_to as $t) { ?>
										<option value="<?php echo $t->id_route_to ?>"><?php echo $t->city  ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<label>Tanggal Berangkat</label>
							<div class="form-group">
								<div class="datepicker-wrap">
									<input type="text" class="input-text full-width" placeholder="bulan / tanggal / tahun" />
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group row">
								<div class="col-xs-12 pull-right">
									<label>&nbsp;</label>
									<button type="submit" class="full-width dark-blue1">CARI JADWAL >></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="destinations section">
		<div class="container">
			<h2>Maskapai Penerbangan Kami</h2>
			<div class="row image-box style1 add-clearfix">
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
							<img src="<?php echo base_url() ?>assets/dist/images/flight/garudaindonesia.png" alt="" width="270" height="160" />
						</figure>
						<div class="details">
							<h4 class="box-title">Garuda Indonesia<small>Indonesia, China</small></a></h4>
						</div>
					</article>
				</div>
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
							<img src="<?php echo base_url() ?>assets/dist/images/flight/citilink.png" alt="" width="270" height="160" />
						</figure>
						<div class="details">
							<h4 class="box-title">Citilink<small>Indonesia</small></a></h4>
						</div>
					</article>
				</div>
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
							<img src="<?php echo base_url() ?>assets/dist/images/flight/airasia.png" alt="" width="270" height="160" />
						</figure>
						<div class="details">
							<h4 class="box-title">AirAsia<small>Indonesia, Malaysia, Singapura</small></a></h4>
						</div>
					</article>
				</div>
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
							<img src="<?php echo base_url() ?>assets/dist/images/flight/lionair.png" alt="" width="270" height="160" />
						</figure>
						<div class="details">
							<h4 class="box-title">Lion Air<small>Indonesia</small></a></h4>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>

	<div class="global-map-area section parallax" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="text-center description">
				<h1>Tahukah kamu?</h1><br>
				<h5>JalanYuk! Travel adalah satu website booking tiket pesawat terbaik se-Stematel.</h5>
			</div>
			<br />
			<div class="row image-box style8">
				<div class="col-md-4">
					<article class="box animated" data-animation-type="fadeInUp">
						<figure class="middle-block">
							<img src="<?php echo base_url() ?>assets/dist/images/vector/murah.png" alt="" class="middle-item" width="100" height="172" />
							<span class="opacity-wrapper"></span>
						</figure>
						<div class="details">
							<h2 class="box-title">Harga Terbaik</h2>
							<p>
								Harga yang diberikan oleh JalanYuk! adalah harga terbaik dan pajak yang ringan tetapi tetap dengan fasilitas terbaik.
							</p>
						</div>
					</article>
				</div>
				<div class="col-md-4">
					<article class="box animated" data-animation-type="fadeInUp">
						<figure class="middle-block">
							<img src="<?php echo base_url() ?>assets/dist/images/vector/terpercaya.png" alt="" class="middle-item" width="100" height="172" />
							<span class="opacity-wrapper"></span>
						</figure>
						<div class="details">
							<h2 class="box-title">Terpercaya</h2>
							<p>
								JalanYuk! memberikan jaminan aman kepada pelanggan sejak pemesanan, keberangkatan, hingga pelanggan sampai tujuan.
							</p>
						</div>
					</article>
				</div>
				<div class="col-md-4">
					<article class="box animated" data-animation-type="fadeInUp">
						<figure class="middle-block">
							<img src="<?php echo base_url() ?>assets/dist/images/vector/mudah.png" alt="" class="middle-item" width="100" height="172" />
							<span class="opacity-wrapper"></span>
						</figure>
						<div class="details">
							<h2 class="box-title">Mudah</h2>
							<p>
								Pemesanan tiket dan pembayaran yang mudah akan membuat pelanggan tetap nyaman dan tidak membuat pusing saat melakukan booking tiket.
							</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
	
	<div class="offers section">
		<div class="container">
			<h1 class="text-center"><strong>JalanYuk!</strong> Blog</h1>
			<p class="col-xs-9 center-block no-float text-center">Berita seputar tempat wisata, penerbangan, paket tour, dan lainnya.P</p>
			<div class="row image-box style2">
				<div class="col-md-6">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
							<a href="<?php echo base_url() ?>Home/blog_post01" title=""><img src="" alt="" width="270" height="192" /></a>
						</figure>
						<div class="details">
							<h4>Blog Post 1</h4>
							<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
							<a href="<?php echo base_url() ?>Home/blog_post01" title="" class="button dark-blue1">Baca ></a>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
							<a href="<?php echo base_url() ?>Home/blog_post02" title=""><img src="" alt="" width="270" height="192" /></a>
						</figure>
						<div class="details">
							<h4>Blog Post 2</h4>
							<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
							<a href="<?php echo base_url() ?>Home/blog_post02" title="" class="button dark-blue1">Baca ></a>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
							<a href="<?php echo base_url() ?>Home/blog_post03" title=""><img src="" alt="" width="270" height="192" /></a>
						</figure>
						<div class="details">
							<h4>Blog Post 3</h4>
							<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
							<a href="<?php echo base_url() ?>Home/blog_post03" title="" class="button dark-blue1">Baca ></a>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="box">
						<figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
							<a href="<?php echo base_url() ?>Home/blog_post04" title=""><img src="" alt="" width="270" height="192" /></a>
						</figure>
						<div class="details">
							<h4>Blog Post 4</h4>
							<p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
							<a href="<?php echo base_url() ?>Home/blog_post04" title="" class="button dark-blue1">Baca ></a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>