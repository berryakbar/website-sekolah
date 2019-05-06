<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my.css">
    <link rel="stylesheet" href="assets/head/style.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="oke" style="height: 450px;">
        <div id="particles-js" style="height: 450px;" >
            <div class="btext">
                 <?php
                include 'koneksi.php';
                $sql="SELECT * FROM profil";
                $query=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($query);
                ?>  
                <img src="admin/img/<?php echo $data['logo']; ?>" style="height: 200px;">
                <h1><?php echo $data["nama"];?></h1>
                <p><?php echo $data["alamat"];?></p>
                <p>Akreditasi : <?php echo $data["akreditas"]; ?></p>
                <?php echo "Email : ".$data['email']."   |  NoHP  :".$data['no_telepon']; ?>
            </div>
        </div>
    </div>
    <marquee>
        <-- Selamat datang di website resmi SDN Adisucipto 2 Depok dan terimakasih atas kunjungannya --> <-- jangan lupa mengisi buku tamu -->
    </marquee>   	
    </div>
    <div class="features-boxed">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                	<div class="colorbg">
                    <div class="box"><img src="img/school.png" height="100px">
                        <h3 class="name"><a href="profil.php">PROFIL</a></h3>
                        <p class="description">halaman ini berisi informasi profil, visi misi, struktur organisasi dan sejarah SDN Adisucipto 2 Depok</p><a href="profil.php" class="learn-more">lihat »</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="img/language.png" height="100px">
                        <h3 class="name"><a href="tulisan.php">INFORMASI TERBARU</a></h3>
                        <p class="description">halaman ini berisi tentang berita, artikle dan pengumuman terbaru pada SDN Adisucipto 2 Depok</p><a href="tulisan.php" class="learn-more">lihat »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="img/trophy2.png" height="100px">
                        <h3 class="name"><a href="prestasi.php">PRESTASI</a></h3>
                        <p class="description">halaman ini berisi daftar beberapa prestasi yang telah diraih oleh SDN Adisucipto 2 Depok</p><a href="prestasi.php" class="learn-more">lihat »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="img/teacher.png" height="100px">
                        <h3 class="name"><a href="guru.php">GURU & KARYAWAN</a></h3>
                        <p class="description">halaman ini berisi profil guru guru serta karyawan yang berkerja di SDN Adisucipto 2 Depok</p><a href="guru.php" class="learn-more">lihat »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="img/goal.PNG" height="100px">
                        <h3 class="name"><a href="extra.php">EKSTRAKURIKULER</a></h3>
                        <p class="description">halaman ini berisi beberapa kegiatan ekstrakurikuler yang diikuti atau dilaksanakan SDN Adisucipto 2 Depok</p><a href="extra.php" class="learn-more">lihat »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src="img/bookshelf.png" height="100px">
                        <h3 class="name"><a href="fasilitas.php">FASILITAS</a></h3>
                        <p class="description">halaman ini berisi apa saja fasilitas belajar maupun ekstrakurikuler yang dimiliki SDN Adisucipto 2 Depok</p><a href="fasilitas.php" class="learn-more">lihat »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row" style="margin-bottom: 50px">
    	<div class="col-md-6" style="margin-top: 50px;">
             <?php 
            include 'koneksi.php';
            $sql="SELECT * FROM profil";
            $query=mysqli_query($conn,$sql);
            $data=mysqli_fetch_assoc($query); ?>
    		<iframe width="100%" height="315" src="<?php echo $data["video"]; ?>" frameborder="0" allow="autoplay" style="border: 5px solid black;" allowfullscreen></iframe>
    	</div>
    	<div class="col-md-6" style="margin-top: 50px;">
    		<h1>Video Singkat </h1>
    		<p>Video ini merupakan video singkat tentang SDN Adisucipto 2 Depok yang merupakan salah satu SDN di daerah istimewa Yogyakarta yang telah Terakreditas A serta mempunyai tenaga pengajar yang profesional serta mempunyai fasilitas belajar maupun ekstrakurikuler yang cukup lengkap dan aktif mengikuti kegiatan lainnya, serta mampu menjuarai beberapa kejuaraan lokal.</p><a href="video.php" class="btn btn-primary">Video lainnya</a>
    	</div>
    </div>
    <hr>
    <div class="row" style="margin-bottom: 50px">
    	<div class="col-md-6" style="margin-top: 50px; text-align: right;">
    		<h1>Galeri Foto</h1>
    		<p>Halaman ini berisi kumpulan foto-foto kegiatan-kegiatan yang dilaksanakan maupun diikuti oleh SDN Adisucipto 2 Depok</p><a href="foto.php" class="btn btn-primary">Lihat lebih banyak</a>
    	</div>
    	<div class="col-md-6" style="margin-top: 50px; margin-bottom: 50px;">
    		<div class="row">
                <?php 
                include 'koneksi.php';
                $sql="SELECT * FROM galeri_foto ORDER BY id_foto DESC LIMIT 0,12";
                $query=mysqli_query($conn,$sql);
                while( $data=mysqli_fetch_assoc($query)) { ?>
		    	<div class="col-md-2" style="margin-top: 5px; margin-bottom: 10px;">
                    <a href="admin/img/<?php echo $data['foto']; ?>" data-lightbox="photos">
		    		<img src="admin/img/<?php echo $data['foto']; ?>" style="width: 70px; height: 60px; object-fit: cover;">
                    </a>
		    	</div>
                <?php } ?>
	    	</div>
    	</div>
    </div>
    <hr>
    <div class="row" >
    	<div class="col-md-6" style="margin-top: 50px; margin-bottom: 50px;">
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9874859969223!2d110.4087693143733!3d-7.791148894385293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd621fff427e3cb76!2sSDN+ADISUCIPTO+2!5e0!3m2!1sid!2sid!4v1535505933189" width="100%" height="300" frameborder="5" style="border: 5px solid black;" allowfullscreen></iframe>
    	</div>
    	<div class="col-md-6" style="margin-top: 50px; ">
    		<h1>Lokasi </h1>
    		<p>SD Negeri Adisucipto 2 berada di wilayah kecamatan Depok. Secara geografis letaknya berada di komplek perumahan AU. Sebelah utara berbatasan dengan SMP Angkasa dan SMK Penerbangan, SMA Angkasa, dan SD Negeri Adisucipto 1. Sebelah selatan berbatasan dengan komplek perumahan AU, Pasar Angkasa, dan rumah sakit Harjolukito. Sebelah timur berbatasan dengan komplek perumahan AU dan STTA. Sebelah barat berbatasan dengan komplek pertokoan dan kampus AKAKOM. Sebagian besar peserta didik berasal dari lingkungan wilayah Kecamatan Depok dan wilayak Kecamatan Bantul.</p>
    	</div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
     <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS.load('particles-js', 'assets/head/particles.json',
        function(){
            console.log('assets/head/particles.json loaded...')
        })
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>