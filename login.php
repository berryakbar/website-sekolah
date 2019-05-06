<?php
session_start();
include 'koneksi.php';

$u=$_POST['username'];
$p=md5($_POST['password']);

$query=mysqli_query($conn,"select * from user where username='$u' and password='$p'");
$row=mysqli_fetch_row($query);
if ($row>0) {
	header("location:admin/index_admin.php");
	$_SESSION['username']=$u;
} else {
	echo "<script>
				alert('login gagal, username atau password salah');
				document.location.href='form_login.php';

		</script>";
}

?>
