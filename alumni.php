<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alumni</title>
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

    <!-- DataTables CSS -->
    <link href="admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="oce">
    </div>
    <div class="container" style="margin-top: 0px; margin-bottom: 50px;">
        <center>
            <div class="judul_laman"><h3>Alumni</h3></div>
        </center>
    	<div class="panel panel-primary">
            <div class="panel-heading">                
            </div>
			<div class="panel-body">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>no</th>
						<th>foto</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelahiran</th>
						<th>Email</th>
                        <th>Lulusan</th>
						<th>Alamat</th>
						<th>Keterangan</th>
					</tr>
				</thead>
			<tbody>
            <?php 
                $no=1;
                include 'koneksi.php';
                $sql="SELECT * FROM alumni";
                $query=mysqli_query($conn,$sql);
                while( $g=mysqli_fetch_assoc($query)) { ?>
                    <tr>
						<td><?php echo $no++; ?></td>
						<td><img src="admin/img/<?php echo $g["foto"]; ?>" width="50" height="50"></td>
						<td><?php echo $g["nisn"]; ?></td>
						<td><?php echo $g["nama"]; ?></td>
						<td><?php echo substr($g["tanggal_lahir"],0,4); ?></td>
						<td><?php echo $g["email"]; ?></td>
                        <td><?php echo $g["tahun_lulus"]; ?></td>
						<td><?php echo $g["alamat"]; ?></td>
						<td><?php echo $g["keterangan"]; ?></td>
					</tr>
				<?php } ?>
			</tbody>
        </table>
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

  <!-- jQuery -->
    <script src="admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>