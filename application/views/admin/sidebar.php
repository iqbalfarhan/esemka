<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();

    $main_segment = $this->uri->segment(2);
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">Menu Utama</li>
			<li class="<?php if($main_segment == "dashboard" || $main_segment == ""){echo "active";} ?>">
				<a href="<?php echo base_url().'admin/dashboard'?>">
					<i class="fa fa-home"></i> <span>Dashboard</span>
					<span class="pull-right-container">
						<small class="label pull-right"></small>
					</span>
				</a>
			</li>
			<li class="treeview <?php if($main_segment == "tulisan"){echo "active";} ?>">
				<a href="#">
					<i class="fa fa-newspaper-o"></i>
					<span>Berita</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
					<li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
					<li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
				</ul>
			</li>
			<li class="<?php if($main_segment == "pengguna"){echo "active";} ?>">
				<a href="<?php echo base_url().'admin/pengguna'?>">
					<i class="fa fa-users"></i> <span>Pengguna</span>
					<span class="pull-right-container">
						<small class="label pull-right"></small>
					</span>
				</a>
			</li>
			<li class="<?php if($main_segment == "agenda"){echo "active";} ?>">
				<a href="<?php echo base_url().'admin/agenda'?>">
					<i class="fa fa-calendar"></i> <span>Agenda</span>
					<span class="pull-right-container">
						<small class="label pull-right"></small>
					</span>
				</a>
			</li>
			<li class="<?php if($main_segment == "pengumuman"){echo "active";} ?>">
				<a href="<?php echo base_url().'admin/pengumuman'?>">
					<i class="fa fa-volume-up"></i> <span>Pengumuman</span>
					<span class="pull-right-container">
						<small class="label pull-right"></small>
					</span>
				</a>
			</li>
			<li class="<?php if($main_segment == "files"){echo "active";} ?>">
				<a href="<?php echo base_url().'admin/files'?>">
					<i class="fa fa-download"></i> <span>Download</span>
					<span class="pull-right-container">
						<small class="label pull-right"></small>
					</span>
				</a>
			</li>
			<li class="treeview <?php if($main_segment == "banner" || $main_segment == "album" || $main_segment == "galeri"){echo "active";} ?>">
				<a href="#">
					<i class="fa fa-camera"></i>
					<span>Gallery</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if($main_segment == "banner"){echo "active";} ?>"><a href="<?php echo base_url().'admin/banner'?>"><i class="fa fa-clone"></i> Banner</a></li>
					<li class="<?php if($main_segment == "album"){echo "active";} ?>"><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a></li>
					<li class="<?php if($main_segment == "galeri"){echo "active";} ?>"><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
				</ul>
			</li>
			
			<li class="treeview <?php if($main_segment == "jurusan" || $main_segment== "kategori_jurusan"){echo "active";} ?>">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>jurusan</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'admin/jurusan'?>"><i class="fa fa-list"></i> List Jurusan</a></li>
					<li><a href="<?php echo base_url().'admin/jurusan/add_jurusan'?>"><i class="fa fa-thumb-tack"></i> Post Jurusan</a></li>
					<li><a href="<?php echo base_url().'admin/kategori_jurusan'?>"><i class="fa fa-wrench"></i>Kategori Jurusan</a></li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="glyphicon glyphicon-book"></i>
					<span>Fasilitas</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url().'admin/fasilitas'?>"><i class="fa fa-list"></i> List Fasilitas</a></li>
					<li><a href="<?php echo base_url().'admin/fasilitas/add_fasilitas'?>"><i class="fa fa-thumb-tack"></i> Post Fasilitas</a></li>
					<li><a href="<?php echo base_url().'admin/kategori_fasilitas'?>"><i class="fa fa-wrench"></i>Kategori Fasilitas</a></li>
				</ul>
			</li>

			<li>
				<a href="<?php echo base_url().'admin/inbox'?>">
					<i class="fa fa-envelope"></i> <span>Inbox</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
					</span>
				</a>
			</li>

			<li>
				<a href="<?php echo base_url().'admin/komentar'?>">
					<i class="fa fa-comments"></i> <span>Komentar</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
					</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>