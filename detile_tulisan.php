<?php 
$id_tulisan=$_GET["id_tulisan"];

 ?>
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
    <div class="oce">
    </div>
    <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-8" style=" border-right: 5px solid grey;">
        	<?php 
        		include 'koneksi.php';
            	$sql="SELECT * FROM tulisan WHERE id_tulisan='$id_tulisan'";
            	$query=mysqli_query($conn,$sql);
            	$data=mysqli_fetch_assoc($query);
                if ($data["foto"]==='no_image') {
                    $data["foto"]="gambar_kosong.png";
                }
        	 ?>
            <center>
                <h4 style="margin-bottom: 30px;"><?php echo $data["judul"] ?></h4>
                <a style="font-size: 10px;"><?php echo $data["tanggal"] ?></a> | <a style="font-size: 12px; color: lightskyblue;"><?php echo $data["penulis"] ?></a>
           <div class="col-md-12" style="margin-top: 5px; margin-bottom: 10px;">
                    <a href="admin/img/<?php echo $data['foto']; ?>" data-lightbox="photos">
		    		<img src="admin/img/<?php echo $data['foto']; ?>" style="width: 100%; height: 300px; object-fit: cover;">
                    </a>
		    	</div>
            </center>
            <?php echo $data["isi"]; ?>
        </div>
        <div class="col-md-4">
            <div class="tulisan">
            <center><h4>Berita Lainya</h4></center>
            </div>
            <ul>
            	<?php 
            		include 'koneksi.php';
            		$sql="SELECT * FROM tulisan WHERE kategori='berita' ORDER BY tanggal DESC";
            		$query=mysqli_query($conn,$sql);
            		while($data=mysqli_fetch_assoc($query)) { ?>
	            		
	                    	<li>
	                    		<b><a style="color: darkblue;" href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"]; ?>"><?php echo $data["judul"]; ?></a></b>
	                    	</li>
	                	
            	<?php } ?>
            </ul>
            <div class="tulisan">
            <center><h4>Artikel Lainya</h4></center>
            </div>
            	<ul>
            	<?php 
            		include 'koneksi.php';
            		$sql="SELECT * FROM tulisan WHERE kategori='artikel' ORDER BY tanggal DESC";
            		$query=mysqli_query($conn,$sql);
            		while($data=mysqli_fetch_assoc($query)) { ?>
	            		
	                    	<li>
	                    		<b><a style="color: darkblue;" href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"]; ?>"><?php echo $data["judul"]; ?></a></b>
	                    	</li>
	                	
            	<?php } ?>
            </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script src="assets/js/Simple-Slider1.js"></script>
</body>

</html>