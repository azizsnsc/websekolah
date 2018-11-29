<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php foreach ( $setting as $set ) {
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Download | <?php echo $set->nama_sekolah; ?></title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/'.$set->logo_sekolah.''?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span><?php echo $set->telp_sekolah; ?>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span><?php echo $set->email_sekolah; ?>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span><?php echo $set->alamat_sekolah; ?>
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/'.$set->logo_dark.''?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>" >About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('kompetensi');?>" style="color:white;background: black; border-radius: 15%;">Kompetensi Keahlian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>" >Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
      <section>
</section>
<!--//END HEADER -->
<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h2 style="font-weight: bold;">Kompetensi Keahlian</h2>
            </div>
        </div>
        <br>
                <hr>
        <br>
              <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="<?php echo base_url('assets/images/tbsm.jpg'); ?>" width="100%">
                        </div>
                    <div class="col-md-10">
                            <div class="event-heading">
                                    <h3>TEKNIK DAN BISNIS SEPEDA MOTOR ( TBSM )</h3>
                                    <p>Mencetak siswa yang trampil di bidang teknik & bisnis sepeda motor.<br/>
                                       Menyiapkan lulusan yang kompetitif di industri otomotif.<br/>
                                       Siap membuka usaha di bidang mechanical sepeda motor.
                                    </p>
                            </div>
                          </div>
                    </div>
                      <hr class="event-underline">
                  </div>

             <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="<?php echo base_url('assets/images/rpl.jpg'); ?>" width="100%">
                        </div>
                    <div class="col-md-10">
                            <div class="event-heading">
                                    <h3>REKAYASA PERANGKAT LUNAK ( RPL )</h3>
                                    <p>Mencetak programer handal, jujur dan terpercaya.<br/>
                                       Membekali siswa dengan design grafis, web development, dan 
                                       teknisi handphone.<br/>
                                       Siap terjun di dunia enterpreneur bidang komputer dan handphone.
                                   </p>
                            </div>
                          </div>
                    </div>
                      <hr class="event-underline">
                  </div>

              <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="<?php echo base_url('assets/images/otkp.jpg'); ?>" width="100%">
                        </div>
                    <div class="col-md-10">
                            <div class="event-heading">
                                    <h3>OTOMATISASI TATA KELOLA PERKANTORAN ( OTKP )</h3>
                                    <p>Membekali siswa dengan skill office administration yang handal.<br/>
                                       Menciptakan lulusan yang siap terjun di bidang perkantoran.<br/>
                                       Mencetak siswa menjadi profesional  administration yang terpercaya.
                                    </p>
                            </div>
                          </div>
                    </div>
                      <hr class="event-underline">
                  </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="<?php echo base_url('assets/images/akl.jpg'); ?>" width="100%">
                        </div>
                    <div class="col-md-10">
                            <div class="event-heading">
                                    <h3>AKUNTANSI DAN KEUANGAN LEMBAGA ( AKL )</h3>
                                    <p>Mencetak lulusan dengan skill di bidang accounting yang terpercaya.<br/>
                                       Membekali siswa dengan ketrampilan pengelolaan keuangan baik di
                                       perusahaan maupun instansi pemerintahan.<br/>
                                       Menyiapkan generasi yang siap terjun di dunia kerja dengan keahlian
                                       di bidang akuntansi yang memadai.
                                    </p>
                            </div>
                          </div>
                    </div>
                      <hr class="event-underline">
                  </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                                <img src="<?php echo base_url('assets/images/bdp.jpg'); ?>" width="100%">
                        </div>
                    <div class="col-md-10">
                            <div class="event-heading">
                                    <h3>BISNIS DARING DAN PEMASARAN ( BDP )</h3>
                                    <p>Mencetak siswa dengan kemampuan bidang marketing yang handal.<br/>
                                       Menciptakan lulusan yang cerdas, inovatif dan kompetitif di dunia
                                       industri marketing.<br/>
                                       Menyiapkan lulusan dengan skill enterpreneur yang berkualitas.
                                    </p>
                            </div>
                          </div>
                    </div>
                      <hr class="event-underline">
                  </div>  
    
    </div>

    </section>

    <!--//END  ABOUT IMAGE -->

    <!--============================= FOOTER =============================-->
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logowhite.png'?>" class="img-fluid" alt="footer_logo"> 
                    </a>
                    <p><?php echo date('Y');?> © <?php echo $set->nama_sekolah;  ?> <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
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
                          <li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>
                          <li><a href="<?php echo site_url('kompetensi');?>">Kompetensi Keahlian</a></li>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> <?php echo $set->alamat_sekolah; ?></p>
                        <p>Email : <?php echo $set->email_sekolah; ?>
                            <br> Phone : <?php echo $set->telp_sekolah; ?></p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
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
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
<?php } ?>