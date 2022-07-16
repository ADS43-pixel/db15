	<?php
	include('koneksi.php');

	$id = $_POST['id_auth'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	 
	$insert=mysqli_query($conn,"INSERT INTO authentikasi SET id_auth='$id', username='$username', email='$email', password='$password'");
	 
	if($insert)
	    header('Location: list.php');
	else
    echo 'Input data gagal';
?>
