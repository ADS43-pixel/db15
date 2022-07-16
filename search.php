	<?php
	include('koneksi.php');
    $keyword = $_GET['keyword'];
 
	$query = mysqli_query($conn, "SELECT * FROM authentikasi WHERE username='$keyword'");
	$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
 # print_r($results);
 ?>

	<html>
		<body>
			<a href="add.php">Tambah Data</a>
			<br/><br/>

		<form action="search.php" method="get">
	
			<input type="text" name="keyword" placeholder="Masukan Nama . . " 
			

			<button type="submit">Search</button>
	</form>
	
	<table border="1">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th>Pilihan</th>
	</tr>

	<?php foreach($results as $result) :?>
		<tr>
			<td><?php echo $result['username'] ?></td>
			<td><?php echo $result['email'] ?></td>
			<td><?php echo $result['password'] ?></td>
		<td>
			<a href="edit.php?id_auth=<?php echo $result['id_auth'] ?>">Edit</a>
			<a href="delete.php?id_auth=<?php echo $result['id_auth'] ?>">| Delete</a>
		</td>
		</tr>

			<?php endforeach; ?>
		</table>
	</body>
</html>
