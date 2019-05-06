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
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="oce">
    </div>
    <div class="container" style="margin-top: 0px; margin-bottom: 50px;">
        <center>
            <div class="judul_laman"><h3>Guru & Karyawan</h3></div>
        </center>
        <div class="row">
            <?php 
                include 'koneksi.php';
                $sql="SELECT * FROM guru_karyawan";
                $query=mysqli_query($conn,$sql);
                while( $data=mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-2" style="margin: 10px; padding-top: 20px; padding-bottom: 20px; border: 5px inset #303f8f; background-color: #fff; font-size: 10px; border-radius: 30px;" >
                <center>
                    <a href="admin/img/<?php echo $data['foto']; ?>" data-lightbox="photos">
                        <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" style="width: 150px; height: 150px; object-fit: cover; border-radius: 20px;">
                    </a>
                    <br>
                    <strong><?php echo $data["nama"]; ?><br>
                    <?php echo "Pendidikan Terakhir : ".$data["pendidikan"]; ?><br>
                    <?php echo "Jabatan : ".$data["jabatan"]; ?><br></strong>
                </center>
            </div> <?php } ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script src="admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>

</body>

</html>