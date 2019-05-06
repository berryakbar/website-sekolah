<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>data alumni</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container" style="margin-top: 10px; margin-bottom: 50px;">
        <center><h4>Alumni</h4></center><hr>
    	<div class="panel panel-primary">
            <div class="panel-heading">                
            </div>
			<div class="panel-body">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelahiran</th>
						<th>Email</th>
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
						<td><?php echo $g["tanggal_lahir"]; ?></td>
						<td><?php echo $g["email"]; ?></td>
						<td><?php echo $g["alamat"]; ?></td>
						<td><?php echo $g["keterangan"]; ?></td>
					</tr>
				<?php } ?>
			</tbody>
        </table>
    </div>
	</div>
   </div>
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