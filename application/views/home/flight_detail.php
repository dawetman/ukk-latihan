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

<section id="content">
	<div class="container flight-detail-page">
		<div class="row">

			<div id="main" class="col-md-9">

				<div id="flight-features" class="tab-container">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="flight-details">
							<div class="intro table-wrapper full-width hidden-table-sm box">
								<div class="col-md-4 table-cell jalanyuk-box">
									<dl class="term-description">
										<dt>Dari</dt>					<dd><?php echo $detail_from->city ?></dd>
										<dt>Ke</dt>						<dd><?php echo $detail_to->city ?></dd>
										<dt>Maskapai</dt>				<dd><?php echo $detail->maskapai_name ?></dd>
										<dt>Kelas</dt>					<dd><?php echo $detail->maskapai_class ?></dd>
										<dt>Kode Pesaawat</dt>			<dd><?php echo $detail->id_pesawat ?></dd>
										<dt>Tipe Pesawat</dt>			<dd><?php echo $detail->pesawat_name ?></dd>
									</dl>
								</div>
								<div class="col-md-8 table-cell">
									<div class="detailed-features booking-details">
										<div class="jalanyuk-box">
											<h4 class="box-title"><?php echo $detail_from->name ?> - <?php echo $detail_to->name ?><small class="pull-right">Satu Jalur Terbang</small></h4>

										</div>
										<div class="table-wrapper flights">
											<div class="table-row first-flight">
												<div class="table-cell timing-detail">
													<div class="timing">
														<div class="check-in">
															<label>Terbang</label>
															<span><?php echo $detail->departure ?></span>
														</div>
														<div class="duration text-center">
															<i class="soap-icon-clock"></i>
															<span>Waktu</span>
														</div>
														<div class="check-out">
															<label>Mendarat</label>
															<span><?php echo $detail->arrival ?></span>
														</div>
													</div>
													<label class="layover">Durasi : 3h 50m</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="long-description">
								<h2>About Delta Airlines</h2>
								<p>
									Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
									<br /><br />
									Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
									<br /><br />
									Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar col-md-3">
				<article class="detailed-logo">
					<figure>
						<img src="http://localhost/ukk/assets/dist/images/flight/<?php echo $detail->logo ?> " alt="">
					</figure>
					<div class="details">
						<h2 class="box-title"><?php echo $detail_from->city ?> - <?php echo $detail_to->city ?><small><?php echo $detail->maskapai_name ?> - <?php echo $detail->maskapai_class ?></small></h2>

						<label>Tanggal berangkat</label>
						<div class="form-group row">
							<div class="col-xs-12">
								<div class="datepicker-wrap">
									<input type="text" class="input-text full-width dark-blue1" placeholder="bulan / tanggal / tahun" />
								</div>
							</div>
						</div>

						<span class="price clearfix">
							<small class="pull-left">Harga Tiket</small>
							<span class="pull-right">Rp. <?php echo $detail->price ?></span>
						</span>

						<div class="duration text-center">
							<dl>
								<dd>Sudah termasuk</dd>
								<dt class="skin-color">PPN 10%</dt>
							</dl>
						</div>


						<a href="flight-booking.html" class="button dark-blue1 full-width uppercase btn-medium">book flight now</a>
					</div>
				</article>
			</div>

		</div>
	</div>
</section>