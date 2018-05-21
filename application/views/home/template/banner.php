<div class="page-title-container style4">
    <div class="container">
        <div class="page-title">
            <i class="soap-icon-plane-right takeoff-effect"></i>
            <h2 class="entry-title">Sebelum Anda Terbang</h2>
        </div>
        <a href="#jalanyuk-login" class="soap-popupbox"><button class="btn-medium dark-blue1">MASUK</button></a>
        <div id="jalanyuk-login" class="jalanyuk-login-box jalanyuk-box">
            <form class="login-form" action="<?php echo base_url(); ?>Login/auth_user" method="post">
                <div class="text-center box"><h2>Masuk</h2></div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="input-text full-width" placeholder="">
                </div>
                <label>Password</label>
                <div class="form-group">
                    <input type="password" class="input-text full-width" placeholder="">
                </div>
                <div class="form-group">
                    <div class="checkbox checkbox-inline">
                        <label>
                            <input type="checkbox"> Ingat informasi login
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn-large full-width dark-blue1">MASUK</button>
            </form>
            <div class="seperator"></div>
            <p>Belum punya akun? <a href="#jalanyuk-daftar" class="goto-signup soap-popupbox">Daftar</a></p>
        </div>
        <div id="jalanyuk-daftar" class="jalanyuk-signup-box jalanyuk-box">
            <form class="signup-form" action="<?php echo base_url(); ?>Login/register_modal" method="post">
                <div class="text-center box"><h2>Daftar</h2></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="input-text full-width" placeholder="">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="input-text full-width" placeholder="">
                </div>
                <label>Password</label>
                <div class="form-group">
                    <input type="password" name="password" class="input-text full-width" placeholder="">
                </div>
                <p>Dengan ini saya setuju dengan<a href="<?php echo base_url() ?>Home/tos" class="goto-signup"> syarat dan ketentuan</a> yang berlaku.</p>
                <div class="seperator"></div>
                <button type="submit" class="btn-large full-width dark-blue1">Daftar</button>
            </form>
            <div class="seperator"></div>
            <p>Sudah punya akun? <a href="#jalanyuk-login" class="goto-signup soap-popupbox">Login</a>.</p>
        </div>
    </div>
</div>