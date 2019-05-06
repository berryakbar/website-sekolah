<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="oce"><br><br><br><br><br><br><br>
        <center><img src="img/logo3.png" height="150"></center>
    </div>
    <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-6" style=" border-right: 5px solid grey;">
            <center>
                <h4 style="margin-bottom: 30px;">Profil</h4>
            </center>
            <table class="table">
                <?php 
                include 'koneksi.php';
                $sql="SELECT * FROM profil";
                $query=mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($query); ?>
                <tr>
                    <td>Nama</td><td><?php echo $data["nama"]; ?></td>
                </tr>
                <tr>
                    <td>Akreditas</td><td><?php echo $data["akreditas"]; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td><td><?php echo $data["alamat"]; ?></td>
                </tr>
                <tr>
                    <td>Kepala Sekolah</td><td><?php echo $data["kepala_sekolah"]; ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td><td><?php echo $data["no_telepon"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td><td><?php echo $data["email"]; ?></td>
                </tr>
                <tr>
                    <td>NPSN</td><td><?php echo $data["npsn"]; ?></td>
                </tr>
                <tr>
                    <td>NSS</td><td><?php echo $data["nss"]; ?></td>
                </tr>
                <tr>
                    <td>Kode POS</td><td><?php echo $data["kode_pos"]; ?></td>
                </tr>
                <tr>
                    <td>Luas Tanah</td><td><?php echo $data["luas_tanah"]; ?></td>
                </tr>
                <tr>
                    <td>Luas Bangunan</td><td><?php echo $data["luas_bangunan"]; ?></td>
                </tr>
                <tr>
                    <td>Status Tanah</td><td><?php echo $data["status_tanah"]; ?></td>
                </tr>  
            </table>
        </div>
        <div class="col-md-6">
            <center><h4 style="margin-bottom: 30px; margin-top: 0px;">Struktur Organisasi</h4>
            <a href="admin/img/<?php echo $data['struktur_organisasi']; ?>" data-lightbox="photos">
                <img class="img-fluid" src="admin/img/<?php echo $data['struktur_organisasi']; ?>" style="width: 400px; height: 250px; object-fit: cover; border-radius: 20px; border: 1px solid black;">
            </a></center>
            <center><h4 style="margin-bottom: 30px; margin-top: 30px;">Visi & Misi</h4></center>
            <table>
                <tr>
                    <td></td><td><strong>Visi</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>"<?php echo $data["visi"]; ?>"</td>
                </tr>
                <tr>
                    <td></td><td><strong>Misi</strong></td>
                </tr>
                <?php 
                include 'koneksi.php';
                $sql="SELECT * FROM misi";
                $query=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td valign="top"><?php echo $data["no"].". ";?></td>
                    <td><?php echo $data["isi"]; ?></td>
                </tr>
                <?php } ?>
            </table>

        </div>
     </div>
     <h4 style="margin-bottom: 30px; margin-top: 50px;">Sejarah SDN Adisucipto 2 Depok</h4>
            <?php 
            include 'koneksi.php';
            $sql="SELECT * FROM profil";
            $query=mysqli_query($conn,$sql);
            $data=mysqli_fetch_assoc($query); ?>
            <p>
                <?php echo $data["sejarah"]; ?><hr>
            </p> 

    <div>
        <div class="col-md-12" style="margin-top: 50px; margin-bottom: 50px;">
            <center><h4>Lokasi</h4></center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9874859969223!2d110.4087693143733!3d-7.791148894385293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd621fff427e3cb76!2sSDN+ADISUCIPTO+2!5e0!3m2!1sid!2sid!4v1535505933189" width="100%" height="300" frameborder="5" style="border: 5px solid black;" allowfullscreen></iframe>
        </div>
    </div>  
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>