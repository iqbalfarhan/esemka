<div class="detailed_chart">
	<div class="container">
		<div class="tulisan">
			<h2>Guru Kami</h2>
		</div>
	</div>

</div>

<section class="our-teachers">
	<div class="container">
		<div class="row">
			<?php
			$datas = json_decode(file_get_contents(API_TEACHER));
			
			foreach ($datas as $data) {
				?>
				<div class="col-md-3 text-center">
					<div style="width: 250px; height: 250px; background-color: #eee; margin-bottom: 30px; border-radius: 100%">
						<img src="<?php echo $data->photo ?>" alt="" style="width: 250px" class="">
					</div>
					<h4><?php echo $data->nama; ?></h4>
					<p><?php echo $data->nign ?></p>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>