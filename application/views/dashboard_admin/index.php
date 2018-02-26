<div class="content-wrapper">
	<section class="content-header">
		<div class="col-xs-12">
			<h1 class="box-title">Selamat Datang di JalanYuk!</h1>
			<h3>Aplikasi booking tiket pesawat online terbaik se-Stematel.</h3>
		</div>
	</section>
</div>

<?php
$session_admin = $this->session->userdata('id_admin');
if ($session_admin < 0)
{
  redirect('Home','refresh');
}
else
{
  redirect('Dashboard','refresh');
} 
?>