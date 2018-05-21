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
                    <div class="text-center box" style="font-size: 4em; font-weight: 400; line-height: 1em;">Masuk ke JalanYuk!</div>
                    <p class="light-blue-color block" style="font-size: 1.3333em;">Silahkan login terlebih dahulu.</p>
                    <div class="col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block">
                        <?php (($redirect != "")?$url=base_url('Login/auth_user/').$redirect:$url=base_url('Login/auth_user'))?>
                        <form class="login-form" action="<?php echo $url ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="input-text input-large full-width" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text input-large full-width" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="checkbox">
                                    <input type="checkbox" value="">Ingat informasi login
                                </label>
                            </div>
                            <button type="submit" class="btn-large full-width yellow">MASUK</button>
                        </form>
                        <div class="seperator"><br></div>
                        <div class="text-center">
                            <br>
                            <h5>
                                Belum punya akun? 
                                <a href="<?php echo base_url() ?>Login/signup"><span class="skin-color">Daftar</span></a>
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