<?php
		include('koneksi.php'); 

		$id = $_GET['id_auth']; 
		$query = mysqli_query($conn,"SELECT * FROM authentikasi WHERE id_auth='$id' LIMIT 1");
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

	?>

	<html>
		<form action="update.php" method="post">
          
			<input type="hidden" name="id_auth" value="<?php echo $result[0]['id_auth']?>">

			<label>Username</label><br/>
			<input type="text" name="username" value="<?php echo $result[0]['username']?>" />
            <br/><br/>

			<label>Email</label><br/>
			<input type="text" name="email" value="<?php echo $result[0]['email']?>" />
	        <br/><br/>

			<label>Password</label><br/>
			<input type="text" name="password" value=<?php echo $result[0]['password']?>  />
            <br/><br/>

            <br/><br/>
			<button type="submit">Perbaharui</button>
			</form>
	</html>
