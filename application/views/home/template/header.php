<!DOCTYPE html>
<html>
<head>
    <title>JalanYuk! | Responsive HTML5 Travel Template</title>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="JalanYuk! | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link id="main-style" rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/components/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/updates.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/responsive.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <?php if ($this->session->userdata('status') == 'user') { ?>
                <div class="container">
                    <ul class="quick-menu pull-left">
                        <li><a href="<?php echo base_url() ?>User">Akun Saya</a></li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <li><a href="<?php echo base_url() ?>Login/logout">KELUAR</a></li>
                    </ul>
                </div>
                <?php } elseif ($this->session->userdata('status') == 'admin')  { ?>
                <div class="container">
                    <ul class="quick-menu pull-left">
                        <li><a href="<?php echo base_url() ?>Dashboard">Dashboard</a></li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <li><a href="<?php echo base_url() ?>Login/logout">KELUAR</a></li>
                    </ul>
                </div>
                <?php } else { ?>
                <div class="container">
                    <ul class="quick-menu pull-left">
                        <li><a href="<?php echo base_url() ?>User">Akun Saya</a></li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <li><a href="<?php echo base_url() ?>Login">Masuk</a></li>
                        <li><a href="<?php echo base_url() ?>Login/signup">Daftar</a></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </header>

        <header id="header" class="navbar-static-top">

            <div class="main-header">

                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">

                    <h1 class="logo navbar-brand">
                        <a href="<?php echo base_url() ?>Home" title="jalanyuk - home">
                            <img src="<?php echo base_url() ?>assets/dist/images/logo.png" alt="JalanYuk! Logo" />
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="<?php echo base_url() ?>Home">Halaman Utama</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url() ?>Home/blog">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="#jalanyuk-tiket" class="soap-popupbox">Cek Tiket</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url() ?>Home/about">Tentang Kami</a>
                            </li>
                        </ul>
                    </nav>

                    <div id="jalanyuk-tiket" class="jalanyuk-login-box jalanyuk-box">
                        <form class="login-form" action="<?php echo base_url();?>Home/flight_ticket/" method="get">
                            <div class="text-center box"><h2>Cek Tiket</h2></div>
                            <div class="form-group">
                                <label>Kode Reservasi</label>
                                <input type="text" class="input-text full-width" placeholder="" name="id_reservasi">
                            </div>
                            <div class="separator"><br></div>
                            <button type="submit" class="btn-large full-width dark-blue1">CARI</button>
                        </form>
                    </div>

                </div>

                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.html">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.html">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </header>

