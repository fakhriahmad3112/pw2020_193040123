<?php 
	echo "Ini adalah tampilan hasil";
	echo "<hr>";

	// echo "Username: ".$_GET['Username'];
	// echo "<hr>";

	// echo "Password: ".$_GET['Password'];


	//fungsi
	//-------------------------------
	function ceklogin($username,$password){
		if ($username == "Fakhri" && $password == "qweasd") {
			echo "Berhasil Login";
		} else{
			echo "Gagal Login";
		}
	}

	//eksekusi
	//---------------------------
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username,$password);

 ?>