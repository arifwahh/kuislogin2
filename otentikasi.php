<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select * from pemakai where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="mahasiswa"){
		setcookie("username", $data[username], time()+3600);
  		setcookie("password", $data[password], time()+3600);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "MAHASISWA";
		header("location:mahasiswa/index.php");
	}else{
		setcookie("username", $data[username], time()+3600);
  		setcookie("password", $data[password], time()+3600);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "DOSEN";
		header("location:dosen/index.php");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}
?>