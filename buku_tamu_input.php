<?php 

include 'koneksi.php';
$nama =htmlspecialchars($_POST["nama"]);
$email =htmlspecialchars($_POST["email"]);
$alamat =htmlspecialchars($_POST["alamat"]);
$penilaian =htmlspecialchars($_POST["penilaian"]);
$komentar =htmlspecialchars($_POST["komentar"]);

$query="INSERT INTO buku_tamu VALUES ('', '$nama', '$email', '$alamat','$penilaian', '$komentar')";
mysqli_query($conn,$query);
$hasil=mysqli_affected_rows($conn);
if ($hasil>0) {
		echo "<script>
				alert('Terimakasih atas kesedian anda dalam mengisi buku tamu, kembali ke halaman awal');
				document.location.href='index.php';

		</script>
		";
	}else{
		echo "<script>
				alert('data gagal ditambahkan');
				document.location.href='index.php';
		</script>";
	}
 ?>