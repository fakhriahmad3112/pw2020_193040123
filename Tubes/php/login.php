<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan Username dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body class="body_login">
  <div class="container login">
    <div class="row">
      <div class="col s20 m10">
        <h3 class="center" style="font-family: Verdana">WELCOME</h3>
        <div class="card horizontal z-depth-2">
          <h3 class="center" style="padding-left: 20px; margin: auto; font-family: Vladimir Script">Login Admin</h3>
          <form action="" method="POST">
            <?php if (isset($error)) : ?>
              <p style="color: red; font-style: italic;">Username atau Password Salah</p>
            <?php endif; ?>
            <div class="input-field col-3 pl-5 pr-5 info-panel">
              <i class="material-icons prefix">account_box</i>
              <input id="username" type="text" name="username" autofocus autocomplete="off" required>
              <label for="icon_prefix">Username</label>
            </div>
            <div class="input-field m6 s6">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password" autofocus required>
              <label for="password">Password</label>
            </div>
            <div class="remember">
              <label>
                <input type="checkbox">
                <span>Remember Me</span>
              </label>
            </div>
            <button type="submit" name="login" style="padding-left: 10px; margin: auto;">Login</button>
            <div class="register">
              <h4 style="font-size: 20px; font-family: 'Courier New', Courier, monospace; padding-left: 10px">Don't Have Any Account?</h4>
              <a href="registrasi.php" style="padding-left: 10px">REGISTER HERE</a>
              <a href="../index.php" style="padding-left: 250px">Back To Index</a>
            </div>
        </div>
      </div>
    </div>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>