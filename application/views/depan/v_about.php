<div class="detailed_chart">
	<div class="container">
		<div class="tulisan">
			<h2>Tentang Kami</h2>
		</div>
	</div>

</div>


<section class="welcome_about">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2>Kata Sambutan</h2>
				<p>Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya,
					sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan.
					Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan
					apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita.
					Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman.
				</p>
				<p>Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin,
					sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif,
					kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi M-School,
					sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.
				</p>
			</div>
			<div class="col-md-5">
				<img src="<?php echo base_url().'theme/images/welcome-img.jpg'?>" class="w-100" alt="#">
			</div>
		</div>
	</div>
</section>


<div class="detailed_chart">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
				<div class="chart-img">
					<img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
				</div>
				<div class="chart-text">
					<p><span class="counter"><?php echo json_decode(file_get_contents(API_TEACHER."/count"))->count ?></span> Guru
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
				<div class="chart-img">
					<img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
				</div>
				<div class="chart-text">
					<p><span class="counter"><?php echo json_decode(file_get_contents(API_STUDENT))->count ?></span> Siswa
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 chart_top">
				<div class="chart-img">
					<img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
				</div>
				<div class="chart-text">
					<p><span class="counter"><?php echo $tot_files;?></span> Download
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="chart-img">
					<img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
				</div>
				<div class="chart-text">
					<p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container text-center bg-light" style="padding: 100px 0">
	<h2>Mengapa <?php echo json_decode(file_get_contents(API_SEKOLAH))->nama_sekolah ?></h2>
	<div style="padding: 50px 0"></div>
	<div class="row">
		<div class="col-md-3">
			<div class="">
				<h1 class="py-3"><i class="text-denger fa fa-desktop"></i></h1>
			</div>
			<h4 class="service-heading"></h4>
			<h3>Technology</h3>
			<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
		<div class="col-md-3">
			<div class="">
				<h1 class="py-3"><i class="text-denger fa fa-users"></i></h1>
			</div>
			<h4 class="service-heading"></h4>
			<h3>Best Tutor</h3>
			<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
		<div class="col-md-3">
			<div class="">
				<h1 class="py-3"><i class="text-denger fa fa-flask"></i></h1>
			</div>
			<h4 class="service-heading"></h4>
			<h3>Practical Training</h3>
			<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
		<div class="col-md-3">
			<div class="">
				<h1 class="py-3"><i class="text-denger fa fa-support"></i></h1>
			</div>
			<h4 class="service-heading"></h4>
			<h3>Support</h3>
			<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
	</div>
</div>