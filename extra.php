
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
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
    
    <div class="features-boxed">
        <div class="container">
            <center>
            <div class="judul_laman"><h3>Ekstrakurikuler</h3></div>
        </center>
            <div class="row justify-content-center features">
                <?php 
                include 'koneksi.php';
                $sql="SELECT * FROM ekstrakurikuler";
                $query=mysqli_query($conn,$sql);
                while( $data=mysqli_fetch_assoc($query)) { ?>
                <div class="col-sm-6 col-md-5 col-lg-4 item" >
                    <div class="colorbg">
                    <div class="box" style="border-radius: 10px;">
                        <a href="detile_ekstra.php?id_ekstra=<?php echo $data["id_ekstra"]; ?>" data-lightbox="photos">
                        <img class="img-fluid" src="admin/img/<?php echo $data['foto']; ?>" style="width: 300px; height: 150px; object-fit: cover; border-radius: 0px;">
                        </a>
                        <h3 class="name"><a href="detile_ekstra.php?id_ekstra=<?php echo $data["id_ekstra"]; ?>"><?php echo $data["nama"]; ?></a></h3>
                    </div>
                </div>
            </div>
            <?php } ?>
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