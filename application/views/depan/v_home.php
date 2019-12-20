<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>

<div class="slider_img layout_two">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($banners as $banner_id => $banner): ?>
                <li data-target="#carousel" data-slide-to="<?php echo $banner_id ?>" class="<?php if($banner_id == 0){echo "active";} ?>"></li>
            <?php endforeach ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php foreach ($banners as $key => $value): ?>
                <div class="carousel-item <?php if($key == 0){echo "active";} ?>" style="background-image: url(<?php echo base_url().'theme/images/'.$value['gambar']?>); background-size: cover; background-position: center center; background-repeat: no-repeat; width: 100%; height: 100vh">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1><?php echo $value['judul'] ?></h1>
                            <h4><?php echo $value['keterangan'] ?></h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Welcome</h2>
               <p>Kami Menyambut baik terbitnya Website ini , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

           </div>
           <div class="col-md-4">
            <img src="<?php echo base_url().'theme/images/welcome.png'?>" class="img-fluid about-img" alt="#">
        </div>
    </div>
</div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div> <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
        </div>
    </div>
</div>
</section>
<!--//END OUR COURSES -->

<!--=========== END OUR TUTORS SECTION ================-->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="row">
                            <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                              <span><?php echo $row->tanggal;?></span>
                              <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                          </div><!-- // end .col-sm-7 -->
                      </div><!-- // end .row -->
                  <?php endforeach;?>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">
                  <?php foreach ($agenda->result() as $row):?>
                    <div class="event_date">
                        <div class="event-date-wrap">
                            <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                            <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                        </div>
                    </div>
                    <div class="date-description">
                        <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                        <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                        <hr class="event_line">
                    </div>
                <?php endforeach;?>

            </div>
        </div>

    </div>
</div>
</div>
</section>
<!--//END EVENTS -->
<!--============================= DETAILED CHART =============================-->
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