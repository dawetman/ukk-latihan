<div class="page-title-container">
	<div class="container yellow">
		<div class="page-title pull-left">
			<h2 class="entry-title">Cek Tiket</h2>
		</div>
		<ul class="breadcrumbs pull-right">
			<li><a href="#">HOME</a></li>
			<li class="active">Cek Tiket</li>
		</ul>
	</div>
</div>

<section id="content">
	<div class="container flight-detail-page">
		<div class="row">

			<div id="main" class="col-sm-8 col-md-9">
				<div class="booking-information jalanyuk-box">
					<h2>Informasi Tiket</h2>
					<dl class="term-description">
						<?php if ($jml_baris != 0) { ?>
						<dt>Kode Reservasi</dt>		<dd><?php echo $ticket->result()[0]->id_reservasi ?></dd>
						<dt>Pemesan</dt>			<dd><?php echo $ticket->result()[0]->user_name ?></dd>
						<dt>Tanggal Terbang</dt>	<dd><?php echo $ticket->result()[0]->date_flight ?></dd>
						<dt>Dari</dt>				<dd><?php echo $ticket_from[0]->bandara_city ?> (<?php echo $ticket_from[0]->bandara_name ?>)</dd>
						<dt>Keberangkatan</dt>		<dd><?php echo $ticket->result()[0]->departure ?></dd>
						<dt>Ke</dt>					<dd><?php echo $ticket_to[0]->bandara_city ?> (<?php echo $ticket_to[0]->bandara_name ?>)</dd>
						<dt>Kedatangan</dt>			<dd><?php echo $ticket->result()[0]->arrival ?></dd>
						<dt>Status</dt>				<dd><?php echo $ticket->result()[0]->status ?></dd>
						<?php } else { ?>
						Data tidak ditemukan!
						<?php } ?>
					</dl>
					<hr />
					<h2>Ingin pesan tiket lagi?</h2>
					<p>Apabila anda ingin melakukan pemesanan tiket lagi, silahkan menuju ke halaman pencarian untuk melakukan pencarian tiket, atau kunjungi tautan di bawah ini.</p>
					<br />
					<a href="<?php echo base_url() ?>Home/flight_search" class="red-color view-link">https://localhost/ukk/Home/flight_search/</a>
				</div>
			</div>

			<div class="sidebar col-md-3">
				<div class="jalanyuk-box contact-box">
					<h4>Butuh bantuan?</h4>
					<p>Kami dengan senang hati siap 24 jam dalam seminggu untuk melayani anda kapanpun dimanapun.</p>
					<address class="contact-details">
						<span class="contact-phone"><i class="soap-icon-phone"></i> +62-8386-3445-645</span>
						<br>
						<a class="contact-email" href="#">jalanyuk@gmail.com</a>
					</address>
				</div>
				<div class="jalanyuk-box guarantee-box">
					<img class="guarantee-image" alt="" src="<?php echo base_url() ?>assets/dist/images/vector/satisficationguaranteed.png" height="65" width="65">
					<h4>Jaminan Kepuasan</h4>
					<p>Jaminan uang kembali dalam 10 hari apabila anda mengalami masalah yang serius saat menggunakan jasa pemesanan kami.</p>
				</div>
				<div class="jalanyuk-box book-with-us-box">
					<h4>Kenapa JalanYuk! Travel?</h4>
					<ul>
						<li>
							<i class="soap-icon-savings circle"></i>
							<h5 class="title"><a href="#">Harga Terbaik</a></h5>
							<p>Harga terbaik, pajak ringan, dengan fasilitas terbaik.</p>
						</li>
						<li>
							<i class="soap-icon-hotel-1 circle"></i>
							<h5 class="title"><a href="#">Terpercaya</a></h5>
							<p>Jaminan aman sejak pemesanan, keberangkatan, hingga pelanggan sampai tujuan. </p>
						</li>
						<li>
							<i class="soap-icon-support circle"></i>
							<h5 class="title"><a href="#">Mudah</a></h5>
							<p>Kemudahan dalam memesanan tiket dan pembayaran.</p>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>