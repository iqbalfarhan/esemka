<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-title">
					<h2>Hubungi Kami</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="contact-form">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 contact-option">
							<div class="contact-option_rsp">
								<h3>Tinggalkan Pesan</h3>
								<form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="xnama" required>
									</div>

									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="xemail" required>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone" name="xphone" required>
									</div>

									<div class="form-group">
										<textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
									</div>

									<button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
									<div><?php echo $this->session->flashdata('msg');?></div>

								</form>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="contact-address">
								<h3>Lokasi</h3>
								<div class="contact-details">
									<i class="fa fa-user" aria-hidden="true"></i>
									<h6>Alamat</h6>
									<p><?php echo json_decode(file_get_contents(API_SEKOLAH))->alamat; ?></p>
									</div>
									<br>
									<div class="contact-details">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<h6>Email</h6>
										<p><?php echo json_decode(file_get_contents(API_SEKOLAH))->email; ?></p>
									</div>
									<br>
									<div class="contact-details">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<h6>Phone</h6>
										<p><?php echo json_decode(file_get_contents(API_SEKOLAH))->telepon; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="contact-center">OR</p>
				</div>
			</div>
		</div>
	</section>