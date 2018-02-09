<!DOCTYPE html>
<html>
<head>
    <title>JalanYuk! | Responsive HTML5 Travel Template</title>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="JalanYuk! | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/animate.min.css">
    <link id="main-style" rel="stylesheet" href="<?php base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/custom.css">
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/updates.css">
    <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/responsive.css">
</head>
<body>

    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="main-header">
                <div class="container">

                    <h1 class="logo navbar-brand">
                        <a href="index.html" title="JalanYuk! - home">
                            <img src="<?php echo base_url() ?>assets/dist/img/logo.png" alt="JalanYuk! Logo"/>
                        </a>
                    </h1>
                    
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu">
                                <a href="<?php base_url() ?>Home">Home</a>
                            </li>
                            <li class="menu">
                                <a href="#jalanyuk-login" class="soap-popupbox">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            <div id="jalanyuk-login" class="travelo-login-box travelo-box">
                <form action="<?php echo base_url() ?>Login/auth" method="POST">
                    <div class="modal-header text-center">
                        <?php  ?>
                        <h2>Login</h2>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="input-text full-width" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right"><button type="submit" value="login">Login</button></a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#jalanyuk-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>

        </header>
    </div>