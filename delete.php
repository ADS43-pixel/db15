	<?php
	include('koneksi.php');
    $id_auth = $_GET['id_auth'];
    $delete = mysqli_query($conn, "DELETE FROM authentikasi WHERE id_auth='$id_auth'");

	if($delete)
		header('Location: list.php');
	else
		echo 'Delete data gagal';  
    ?>
