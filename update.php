	<?php
	include('koneksi.php'); 

    $id = $_POST['id_auth'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    $update = mysqli_query($conn, "UPDATE authentikasi SET username='$username', email='$email', password='$password' WHERE id_auth='$id'");

	if($update)
		header('Location: list.php');
	else
		echo 'Update data gagal'; 
    ?>
