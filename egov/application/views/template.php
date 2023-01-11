<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMA N 3 SUMEDANG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url()?>/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url () ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url () ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>(0261) 201150</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>sman3sumedang@yahoo.co.id</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/profile.php?id=100063776575213&mibextid=ZbWKwL">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://twitter.com/Sman3Sumedang?t=LDDKBx7nSLh0jOamJgUhkw&s=08">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://instagram.com/sman3sumedang?igshid=YmMyMTA2M2Y=">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="https://youtube.com/@sman3sumedang_849">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?php echo base_url()?>index.php/home" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"><i><font size="5">
                    <img class="mx-auto" style="width: 100%; max-width: 70px;" src="<?php echo base_url()?>/assets/img/logo.png" style="object-fit: cover;">
                </i>SMAN 3 SUMEDANG</font></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?php echo base_url()?>index.php/home" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil Sekolah</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url()?>index.php/sejarah" class="dropdown-item">Sejarah</a>
                            <a href="<?php echo base_url()?>index.php/visimisi" class="dropdown-item">Visi & Misi</a>
                            <a href="<?php echo base_url()?>index.php/tujuan" class="dropdown-item">Tujuan Sekolah</a>
                            <a href="<?php echo base_url()?>index.php/logo" class="dropdown-item">Filosofi Logo</a>
                            <a href="<?php echo base_url()?>index.php/guru" class="dropdown-item">Tenaga Pendidik</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Program Belajar</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url()?>index.php/bahasa" class="dropdown-item">Program Ilmu Bahasa (IBB)</a>
                            <a href="<?php echo base_url()?>index.php/ipa" class="dropdown-item">Program Ilmu Pengetahuan Alam (MIPA)</a>
                            <a href="<?php echo base_url()?>index.php/ips" class="dropdown-item">Program Ilmu Pengetahuan Sosial (IPS)</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kesiswaan</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url()?>index.php/ekskul" class="dropdown-item">Ekstrakurikuler dan Organisasi</a>
                            <a href="<?php echo base_url()?>index.php/prestasi" class="dropdown-item">Prestasi Siswa</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Topik</a>
                        <div class="dropdown-menu m-0">
                        <a href="<?= base_url('assets/ppdb.html')?>" class="dropdown-item">PPDB SMA/SMK JABAR 2022</a>
                            <a href="<?= base_url('assets/pengumuman.html')?>" class="dropdown-item">Pengumuman</a>
                            <a href="<?= base_url('assets/berita.html')?>" class="dropdown-item">Berita</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url()?>index.php/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <?php echo $konten;?>


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>SMA N 3 SUMEDANG</h1>
                    </a>
                    <p class="m-0">A research school for the better future</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Kontak Kami</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>JL. CIPADUNG NO. 54, Kabupaten Sumedang, Jawa Barat</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>(0261) 201150</p>
                    <p><i class="fa fa-envelope mr-2"></i>sman3sumedang@yahoo.co.id</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="https://twitter.com/Sman3Sumedang?t=LDDKBx7nSLh0jOamJgUhkw&s=08"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="https://www.facebook.com/profile.php?id=100063776575213&mibextid=ZbWKwL"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="https://instagram.com/sman3sumedang?igshid=YmMyMTA2M2Y="><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Program Belajar</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/bahasa"><i class="fa fa-angle-right mr-2"></i>Program Bahasa (IBB)</a>
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/ipa"><i class="fa fa-angle-right mr-2"></i>Program Ilmu Pengetahuan Alam (MIPA)</a>
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/ips"><i class="fa fa-angle-right mr-2"></i>Program Ilmu Pengetahuan Sosial (IPS)</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/sejarah"><i class="fa fa-angle-right mr-2"></i>Sejarah</a>
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/visimisi"><i class="fa fa-angle-right mr-2"></i>Visi & Misi</a>
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/tujuan"><i class="fa fa-angle-right mr-2"></i>Tujuan Sekolah</a>
                        <a class="text-white-50 mb-2" href="<?php echo base_url()?>index.php/logo"><i class="fa fa-angle-right mr-2"></i>Filosofi Logo</a>
                        <a class="text-white-50" href="<?php echo base_url()?>index.php/contact"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="<?php echo base_url()?>index.php/home">sman3sumedang</a>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url () ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url () ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url () ?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url () ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url () ?>assets/js/main.js"></script>
</body>

</html>