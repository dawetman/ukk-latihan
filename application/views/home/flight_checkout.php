<div class="page-title-container">
	<div class="container yellow">
		<div class="page-title pull-left">
			<h2 class="entry-title">Konfirmasi Pemesanan</h2>
		</div>
		<ul class="breadcrumbs pull-right">
			<li><a href="#">HOME</a></li>
			<li class="active">Konfirmasi Pemesanan</li>
		</ul>
	</div>
</div>

<section id="content">
	<div class="container flight-detail-page">
		<div class="row">

			<div id="main" class="col-sm-8 col-md-9">
				<div class="booking-information jalanyuk-box">
					<h2>Konfirmasi Pemesanan Tiket Pesawat</h2>
					<hr />
					<div class="booking-confirmation clearfix">
						<i class="soap-icon-recommend icon circle"></i>
						<div class="message">
							<h4 class="main-message">Terima kasih, pemesanan tiket anda berhasil!</h4>
							<p>Segeralah lakukan pembayaran dalam kurun waktu 30 menit atau tiket anda akan kami batalkan.</p>
						</div>
						<a href="<?= base_url() ?>User/v_reservasi" class="print-button button btn-small dark-blue1">CEK STATUS TIKET</a>
					</div>
					<hr />
					<h2>Informasi Reservasi</h2>
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
					<h2>Pembayaran</h2>
					<p>Silahkan segera lakukan pembayaran dengan melakukan transfer atau setor tunai ke salah satu rekening bank di bawah ini.</p>
					<div class="row image-box style1 add-clearfix">
						<div class="col-sms-6 col-sm-6 col-md-4">
							<article class="box">
								<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
									<img src="<?php echo base_url() ?>assets/dist/images/bank/mandiri.png" alt="" width="270" height="100" />
								</figure>
								<div class="details text-center">
									<h4 class="box-title">Mandiri<small>139-00-1658329-0<br>a.n. Gilang Setiawan</small></a></h4>
								</div>
							</article>
						</div>
						<div class="col-sms-6 col-sm-6 col-md-4">
							<article class="box">
								<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
									<img src="<?php echo base_url() ?>assets/dist/images/bank/bni.png" alt="" width="270" height="100" />
								</figure>
								<div class="details text-center">
									<h4 class="box-title">BNI<small>139-00-1658329-0<br>a.n. Gilang Setiawan</small></a></h4>
								</div>
							</article>
						</div>
						<div class="col-sms-6 col-sm-6 col-md-4">
							<article class="box">
								<figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
									<img src="<?php echo base_url() ?>assets/dist/images/bank/bca.png" alt="" width="270" height="100" />
								</figure>
								<div class="details text-center">
									<h4 class="box-title">BCA<small>139-00-1658329-0<br>a.n. Gilang Setiawan</small></a></h4>
								</div>
							</article>
						</div>
					</div>
					<div class="other-details row">
						<div class="col col-md-2">
						</div>
						<div class="col col-md-7">
							<div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-6 pull-left">
									<h4>Jumlah yang harus dibayar :</h4>
								</div>
								<div class="col col-md-5">
									<span class="price clearfix">
										<span class="pull-right" id="harga" name="harga">
											Rp. <?php echo $ticket->result()[0]->price ?>
											<small>Perhatikan 3 digit terakhir!</small>
										</span>
									</span>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-11 text-center">
									<p>Apabila sudah melakukan transfer, mohon tunggu 1-2 jam kerja untuk admin mengkonfirmasi tiket anda, terima kasih.</p>
								</div>
							</div>
						</div>
						<div class="col col-md-2">
						</div>
					</div>
					<hr/>
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