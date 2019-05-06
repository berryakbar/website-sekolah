<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulisan</title>
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
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="oce">
       
    </div>
    <div class="container" style="margin-top: 0px; margin-bottom: 50px;">
        <center>
            <div class="judul_laman" style="background-color: white; color: black; border-radius: 0px;"><h3>Informasi</h3></div>
        </center>
    <div class="row">
         <div class="col-md-8">
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <?php 
                include 'koneksi.php';
                $query=mysqli_query($conn,"select * from tulisan where kategori='berita' order by tanggal desc limit 1");
                while ($data=mysqli_fetch_assoc($query)) {   ?>
            <div class="carousel-item active">
                <div class="tulisan" style="margin-bottom: 0px;">
                    <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>" style="color: white;"><h4><?php echo $data["judul"]; ?></h4></a>
                </div>
                <a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan'];?>">
                    <img class="w-100 d-block" src="admin/img/<?php if ($data['foto']==='no_image') {
                            $data['foto']='gambar_kosong.png'; echo $data['foto']; }else{ echo $data['foto']; } ?>"
                             alt="Slide Image" style="height:300px;">
                </a>
            </div>
            <?php } ?>
            <?php 
                include 'koneksi.php';
                $query=mysqli_query($conn,"select * from tulisan where kategori='artikel' order by tanggal desc limit 1");
                while ($data=mysqli_fetch_assoc($query)) {   ?>
            <div class="carousel-item">
                <div class="tulisan" style="margin-bottom: 0px;">
                    <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>" style="color: white;"><h4><?php echo $data["judul"]; ?></h4></a>
                </div>
                <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>">
                    <img class="w-100 d-block" src="admin/img/<?php if ($data['foto']==='no_image') {
                            $data['foto']='gambar_kosong.png'; echo $data['foto']; }else{ echo $data['foto']; } ?>" 
                    alt="Slide Image" style="height:300px;"></a>
            </div>
            <?php } ?>
            <?php 
                include 'koneksi.php';
                $query=mysqli_query($conn,"select * from tulisan where kategori='pengumuman' order by tanggal desc limit 1");
                while ($data=mysqli_fetch_assoc($query)) {   ?>
            <div class="carousel-item">
                <div class="tulisan" style="margin-bottom: 0px;">
                    <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>" style="color: white;"><h4><?php echo $data["judul"]; ?></h4></a>
                </div>
                <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>">
                    <img class="w-100 d-block" src="admin/img/<?php if ($data['foto']==='no_image') {
                            $data['foto']='gambar_kosong.png'; echo $data['foto']; }else{ echo $data['foto']; } ?>" 
                    alt="Slide Image" style="height:300px;"></a>
            </div>
            <?php } ?>
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
            </a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
        </div>
        <div class="col-md-4" style="background-color: #eaeaea; padding: 0px;">
            <div class="tulisan">
                <h4>Pengumuman</h4>
            </div>
            <ul>
            	<?php 
            	include 'koneksi.php';
            	$sql="SELECT * FROM tulisan WHERE kategori='pengumuman' order by tanggal desc limit 0,5";
            	$query=mysqli_query($conn,$sql);
            	while($data=mysqli_fetch_assoc($query)) { ?>
            	<li>
            		<a style="color: darkblue;" href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>"><b><?php echo $data["judul"]; ?></b></a>
            	</li>
            <?php } ?>
            </ul>

        </div>
     </div>
     <br><br>
     <div class="col-md-12">
            <div class="tulisan">
                <h4>Berita</h4>
            </div>
            <div class="row projects">
                <?php 
                    include 'koneksi.php';
                    $query=mysqli_query($conn,"select * from tulisan where kategori='berita' order by tanggal desc limit 1");
                    while ($data=mysqli_fetch_assoc($query)) {
                       if ($data["foto"]==='no_image') {
                            $data["foto"]="gambar_kosong.png";
                        }
                 ?>
                <div class="col-sm-12" style="background-color:#ffffff; ">
                    <div class="row">
                        <div class="col-md-12 col-lg-4" style="height: 200px; ">
                            <a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">
                                <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" style="width: 400px; height: 200px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="col" style="height: 203px; overflow: hidden;">
                            <a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>"  style="color :darkblue;">
                                <b><?php echo $data['judul']; ?></b>
                            </a>
                            <p><?php echo $data['tanggal']; ?></p>
                            <p class="description"><?php echo $data['isi']; ?></p>
                        </div>
                    </div>
                    <div style="text-align: right; padding-top: 8px;">
                        <strong><a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">lanjutkan membaca --></a></strong>
                    </div>
                    <hr>
                </div>

                <?php } ?>
                <?php 
                    include 'koneksi.php';
                    $query=mysqli_query($conn,"select * from tulisan where kategori='berita' order by tanggal desc limit 1,6");
                    while ($data=mysqli_fetch_assoc($query)) {
                      
                 ?>

                <div class="col-sm-4 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="col-md-12 col-lg-12">
                                <!--<a href="berita.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">
                                    <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" width="150" height="150">
                                </a>-->
                            </div>
                            <div class="col">
                                <b><a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>" style="color: darkblue;">
                                    <?php echo $data['judul']; ?>  
                                </a></b>
                                <p style="font-size: 12px;"><?php echo $data['tanggal']; ?></p>
                                <p class="description"></p>
                                <hr>
                            </div>
                        </div>
                        
                    </div>
                </div>

                  <?php  } ?>


            </div>

        </div>
     <br><br><br>
     <div class="col-md-12">
            <div class="tulisan">
                <h4>Artikel</h4>
            </div>
            <div class="row projects">
                <?php 
                    include 'koneksi.php';
                    $query=mysqli_query($conn,"select * from tulisan where kategori='artikel' order by tanggal desc limit 1");
                    
                    while ($data=mysqli_fetch_assoc($query)) {
                      if ($data['foto']==='no_image') {
                            $data['foto']="gambar_kosong.png";
                        }
                 ?>
                <div class="col-sm-12" style="background-color:#ffffff;">
                    <div class="row">
                        <div class="col-md-12 col-lg-4" style="height: 200px;">
                            <a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">
                                <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" style="width: 400px; height: 200px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="col" style="height: 203px; overflow: hidden;">
                            <a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>"  style="color :darkblue;">
                                <b><?php echo $data['judul']; ?></b>
                            </a>
                            <p><?php echo $data['tanggal']; ?></p>
                            <p class="description"><?php echo $data['isi']; ?></p>
                        </div>
                    </div>
                    <div style="text-align: right; padding-top: 8px;">
                        <strong><a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">lanjutkan membaca --></a></strong>
                    </div>
                    <hr>
                </div>

                <?php } ?>
                <?php 
                    include 'koneksi.php';
                    $query=mysqli_query($conn,"select * from tulisan where kategori='artikel' order by tanggal desc limit 1,6");
                    while ($data=mysqli_fetch_assoc($query)) {
                      
                 ?>
                <div class="col-sm-4 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-12" style=":hover {background-color:lightblue;}">
                            <div class="col-md-12 col-lg-12">
                                <!--<a href="berita.php?id_tulisan=<?php echo $data['id_tulisan']; ?>">
                                    <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" width="150" height="150">
                                </a>-->
                            </div>
                            <div class="col">
                                <b><a href="detile_tulisan.php?id_tulisan=<?php echo $data['id_tulisan']; ?>"  style="color :darkblue;"><?php echo $data['judul']; ?></a></b>
                                <p style="font-size: 12px;"><?php echo $data['tanggal']; ?></p>
                                <p class="description"></p>
                                <hr>
                            </div>
                        </div>
                        
                    </div>
                </div>

                  <?php  } ?>


            </div>

        </div>
    </div>
   
    <?php include 'footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>