<?php
        $id = $_POST['id']; 
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$jabatan = $_POST['jabatan'];

		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO pemakai(nama,username,password,level) VALUES('$nama','$username','$password','$jabatan')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>LOGIN</a>";
	?>