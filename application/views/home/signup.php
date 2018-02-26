<!DOCTYPE html>
<html class="">
<head>
    <title>JalanYuk! | Admin Login</title>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,200,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/animate.min.css">
    <link id="main-style" rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/updates.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/responsive.css">
</head>
<body class="soap-login-page body-blank">
    <div id="page-wrapper" class="wrapper-blank">
        <section id="content">
            <div class="container">
                <div id="main">
                    <h1 class="logo block">
                        <a href="<?php echo base_url() ?>Home" title="Travelo - home">
                            <img src="<?php echo base_url() ?>assets/dist/images/logo.png" alt="JalanYuk! Logo" />
                        </a>
                    </h1>
                    <div class="text-center box" style="font-size: 4em; font-weight: 400; line-height: 1em;">Daftar ke JalanYuk!</div>
                    <div class="seperator"><label>&nbsp;</label></div>
                    <div class="col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block">
                        <form class="login-form" action="<?php echo base_url(); ?>Login/register" method="post">
                            <?php
                            $error_msg=$this->session->flashdata('error_msg');
                            if($error_msg){
                              ?>
                                <div class="text-center">
                                <h3><?php echo $error_msg ?></h4>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input type="email" class="input-text input-large full-width" name='email' placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-text input-large full-width" name='username' placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="input-text input-large full-width" name='password' placeholder="Password">
                            </div>
                            <div class="form-group">
                                <p>
                                    Dengan ini saya setuju dengan<a href="<?php echo base_url() ?>Home/tos" class="goto-signup"><span class="skin-color"> syarat dan ketentuan</span></a> yang berlaku.
                                </p>
                            </div>
                            <button type="submit" class="btn-large full-width yellow">DAFTAR</button>
                        </form>
                        <div class="seperator"><br/></div>
                        <div class="text-center">
                            <h5>
                                Sudah punya akun? 
                                <a href="<?php echo base_url() ?>Login"><span class="skin-color">Masuk</span></a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="copyright">
                        <p>&copy; 2018 JalanYuk!</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery-ui.1.10.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/bootstrap.js"></script>
    <script type="text/javascript">
        var enableChaser = 0;
    </script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/theme-scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dist/js/scripts.js"></script>

</body>
</html>