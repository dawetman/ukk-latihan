<div class="page-title-container">
    <div class="container yellow">
        <div class="page-title pull-left">
            <h2 class="entry-title">Hasil Pencarian</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li class="active">Hasil Pencarian</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div id="main">
            <div class="row">

                <div class="col-md-9">

                    <div class="flight-list listing-style3 flight clearfix tab-pane">
                        <div class="box">
                            <form action="<?php echo base_url() ?>Home/flight_search" method="get">
                                <div class="row">

                                    <div class="col-md-12">
                                        <h3 class="title pull-left">
                                            Cari Jadwal Pesawat
                                        </h3>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Dari mana?</label>
                                        <div class="selector">
                                            <select class="full-width" name="id_route_from">
                                                <?php foreach($route_from as $f) { ?>
                                                <option value="<?php echo $f->id_route_from ?>"><?php echo $f->city ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label>Kemana?</label>
                                        <div class="selector">
                                            <select class="full-width" name="id_route_to">
                                                <?php foreach($route_to as $t) { ?>
                                                <option value="<?php echo $t->id_route_to ?>"><?php echo $t->city  ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label>Tanggal berangkat</label>
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width dark-blue1" placeholder="bulan / tanggal / tahun" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <label>&nbsp;</label>
                                                <button type="submit" class="full-width dark-blue1">CARI JADWAL >></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sort-by-section clearfix box">
                        <h4 class="sort-by-title block-sm text-center">Hasil Pencarian</h4>
                        <ul class="sort-bar clearfix block-sm pull-right">
                            <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                            <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                            <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>duration</span></a></li>
                        </ul>
                    </div>

                    <div class="flight-list listing-style3 flight">
                        <?php foreach($rute as $data) { ?>
                        <article class="box">
                            <div class="details col-sm-12">
                                <div class="details-wrapper">
                                    <div class="first-row">
                                        <div>
                                            <h4 class="box-title">
                                                <?php foreach($rute_from as $f) { ?> <?php echo $f->city ?> <?php } ?> - <?php foreach($rute_to as $t) { ?> <?php echo $t->city ?> <?php } ?><small><?php echo $data->maskapai_name ?> (<?php echo $data->class ?>)</small>
                                            </h4>
                                            <a class="button"></a>
                                            <div class="amenities">
                                                <i class="soap-icon-wifi circle"></i>
                                                <i class="soap-icon-entertainment circle"></i>
                                                <i class="soap-icon-fork circle"></i>
                                                <i class="soap-icon-suitcase circle"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price"><small>TARIF/KURSI<br>Sudah termasuk PPN 10%</small><br>Rp. <?php echo $data->price ?></span>
                                        </div>
                                    </div>
                                    <div class="second-row">
                                        <div class="time">
                                            <div class="take-off col-sm-4">
                                                <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                <div>
                                                    <span class="skin-color">Dari</span><br/><?php foreach($rute_from as $f) { ?> <?php echo $f->name ?> <?php } ?>
                                                </div>
                                            </div>
                                            <div class="landing col-sm-4">
                                                <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                <div>
                                                    <span class="skin-color">Ke</span><br/><?php foreach($rute_to as $t) { ?> <?php echo $t->name ?> <?php } ?>
                                                </div>
                                            </div>
                                            <div class="total-time col-sm-2">
                                                <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                                                <div>
                                                    <span class="skin-color">Berangkat</span><br/><?php echo $data->departure ?>
                                                </div>
                                            </div>
                                            <div class="total-time col-sm-2">
                                                <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                                                <div>
                                                    <span class="skin-color">Sampai</span><br/><?php echo $data->arrival ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="<?php echo base_url('Home/flight_detail/').$data->id_rute;?>" class="button btn-small full-width dark-blue1">PILIH JADWAL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                    </div>

                    <a class="button uppercase full-width btn-large yellow">
                        Muat lebih banyak
                    </a>
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
                                <p>Harga terbaik, pajak ringan, tetapi tetap dengan fasilitas terbaik.</p>
                            </li>
                            <li>
                                <i class="soap-icon-hotel-1 circle"></i>
                                <h5 class="title"><a href="#">Terpercaya</a></h5>
                                <p>Jaminan aman sejak pemesanan, keberangkatan, hingga pelanggan sampai tujuan. </p>
                            </li>
                            <li>
                                <i class="soap-icon-support circle"></i>
                                <h5 class="title"><a href="#">Mudah</a></h5>
                                <p>Kemudahan dalam memesanan tiket dan melakukan pembayaran.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>