<aside class="main-sidebar">
	<section class="sidebar">

		<ul class="sidebar-menu" data-widget="tree">
			<li class="treeview">
				<a>
					<i class=""></i> <span>User</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>User/v_data_user"><i class="fa"></i>Data User</a></li>
					<li><a href="<?php echo base_url() ?>User/v_detail_user"><i class="fa"></i>Detail User</a></li>
				</ul>
			</li>
		</ul>

		<ul class="sidebar-menu" data-widget="tree">
			<li class="treeview">
				<a href="<?php echo base_url('Tambah') ?>">
					<i class=""></i> <span>Maskapai</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>User/v_data_maskapai"><i class="fa"></i>Data Maskapai</a></li>
					<li><a href="<?php echo base_url() ?>User/v_rute_maskapai"><i class="fa"></i>Rute Maskapai</a></li>
					<li><a href="<?php echo base_url() ?>User/v_data_pesawat"><i class="fa"></i>Data Pesawat</a></li>
				</ul>
			</li>
		</ul>

		<ul class="sidebar-menu" data-widget="tree">
			<li class="treeview">
				<a href="<?php echo base_url('Tambah') ?>">
					<i class=""></i> <span>Reservasi</span>
				</a>
			</li>
		</ul>

	</section>
</aside>