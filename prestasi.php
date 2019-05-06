<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi</title>
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
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <center><img src="img/piala.png" width="50"><br><h4>Prestasi</h4><br>
        </center>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Prestasi</th>
                <th>Waktu</th>
                <th>Tingkat</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
            <?php 
                $no=1;
                include 'koneksi.php';
                $sql="SELECT * FROM prestasi";
                $query=mysqli_query($conn,$sql);
                while( $data=mysqli_fetch_assoc($query)) { ?>
                    <tr style="background-color: #eaeaea;">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['tingkat']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                    </tr>
             <?php   } ?>
            
                
            </tbody>

        </table>
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