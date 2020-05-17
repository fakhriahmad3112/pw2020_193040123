<?php 

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "admin" && $password == "12345") {
    echo "Selamat Datang Admin";
}else{
    echo "username / password salah";
}


  ?>