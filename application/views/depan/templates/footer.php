<!--============================= FOOTER =============================-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="foot-logo">
					<a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2">
						<?php
						if (json_decode(file_get_contents(API_SEKOLAH))->logo == "") {
							?>
							<img class="img img-responsive w-100" src="<?php echo base_url().'theme/images/logo-dark.png'?>">
							<?php
						}
						else{
							?>
							<img class="img img-responsive" height="100px;" src="<?php echo json_decode(file_get_contents(API_SEKOLAH))->logo; ?>">
							<?php
						}
						?>
					</a>
					<p><?php echo date('Y');?> © copyright by <a href="" target="_blank"></a>. <br>All rights reserved.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sitemap">
					<h3>Menu Utama</h3>
					<ul>
						<li><a href="<?php echo site_url();?>">Home</a></li>
						<li><a href="<?php echo site_url('about');?>">About</a></li>
						<li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
						<li><a href="<?php echo site_url('informasi');?>">Jurusan</a></li>
						<li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
						<li><a href="<?php echo site_url('contact');?>">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sitemap">
					<h3>Akademik</h3>
					<ul>
						<li><a href="<?php echo site_url('guru');?>">Guru</a></li>
						<li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
						<li><a href="<?php echo site_url('sekolah');?>">Fasilitas</a></li>
						<li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
						<li><a href="<?php echo site_url('download');?>">Download</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="address">
					<h3>Hubungi Kami</h3>
					<p><span>Alamat: </span> <?php echo json_decode(file_get_contents(API_SEKOLAH))->alamat; ?></p>
					<p>Email : <?php echo json_decode(file_get_contents(API_SEKOLAH))->email ?>
					<br> Phone : <?php echo json_decode(file_get_contents(API_SEKOLAH))->telepon ?></p>
					<a href="#" class="btn btn-primary"><i class="fa fa-list"></i>&nbsp; PPDB Online</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--//END FOOTER -->
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
<!-- Plugins -->
<script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jssocials.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
<script>
	$(document).ready(function(){
		$('table#datatable').DataTable();

		$(".sharePopup").jsSocials({
			showCount: true,
			showLabel: true,
			shareIn: "popup",
			shares: [
				{ share: "twitter", label: "Twitter" },
				{ share: "facebook", label: "Facebook" },
				{ share: "googleplus", label: "Google+" },
				{ share: "linkedin", label: "Linked In" },
				{ share: "pinterest", label: "Pinterest" }
			]
		});
	});
</script>
</body>

</html>