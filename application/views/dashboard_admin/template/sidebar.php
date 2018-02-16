<aside class="main-sidebar bg-black">
	<section class="sidebar">

		<ul class="sidebar-menu" data-widget="tree">
			<li class="header text-center">Navigasi Utama</li>
			<li class="treeview">
				<a>
					<i class="fa fa-user"></i> <span>Pelanggan</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>Dashboard/v_data_pelanggan"><i class="fa"></i>Data Pelanggan</a></li>
					<li><a href="<?php echo base_url() ?>Dashboard/v_detail_pelanggan"><i class="fa"></i>Detail Pelanggan</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a>
					<i class="fa fa-plane"></i> <span>Maskapai</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo base_url() ?>Dashboard/v_data_maskapai"><i class="fa"></i>Data Maskapai</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>Dashboard/v_rute_maskapai"><i class="fa">
						</i>Rute Maskapai</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>Dashboard/v_data_pesawat"><i class="fa"></i>Data Pesawat</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class="fa fa-calendar"></i> <span>Reservasi</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>Dashboard/v_data_admin">
					<i class="fa fa-heart"></i> <span>Admin</span>
				</a>
			</li>
			<li class="header text-center">Navigasi Akun</li>
			<li>
				<a href="<?php echo base_url() ?>Dashboard/v_detail_user">
					<i class="fa fa-info-circle"></i> <span>Detail Akun</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>Login/logout">
					<i class="fa fa-sign-out"></i> <span>Logout</span>
				</a>
			</li>
		</ul>

	</section>
</aside>