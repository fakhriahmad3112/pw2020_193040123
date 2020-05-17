<?php

require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Laman Registrasi</title>

</head>

<body class="body_registrasi">
  <div class="container registrasi">
    <div class="row">
      <div class="col s30 m20">
        <h3 class="center" style="font-family: Verdana">REGISTER ADMIN</h3>
        <div class="card horizontal z-depth-2">
          <h3 class="center" style="padding-left: 15px; font-family: Vladimir Script">Register</h3>
          <form action="" method="POST">
            <div class="input-field col-3 pl-5 pr-5 info-panel">
              <i class="material-icons prefix">account_box</i>
              <input id="username" type="text" name="username" autofocus autocomplete="off" required placeholder="username">
            </div>
            <div class="input-field m6 s6">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password" autofocus required placeholder="password">
            </div>
            <div class="remember">
              <label>
                <input type="checkbox">
                <span>Remember Me</span>
              </label>
            </div>
            <button type="submit" name="register" style="padding-left: 10px; margin: auto;">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

</html>