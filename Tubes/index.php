<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
          JUDUL LIKE '%$keyword%' OR
          TAHUN_TERBIT LIKE '%$keyword%' OR
          PENGARANG LIKE '%$keyword%' OR
          GENRE LIKE '%$keyword%' ");
} else {
  //melakukan query
  $buku = query("SELECT * FROM buku");
}

?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fakhri Book's Store</title>
</head>

<body id="home" class="scrollspy">

  <div class="navbar-fixed">
    <nav class="black darken-2" style="opacity: 80%">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#home" class="brand-logo active"><img class="circle responsive-img" src="assets/img/ahmad.png" width="30">Fakhri Book's Store</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <img src="" alt="" width="60px">
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-light" href="#list">List Book</a></li>
            <li><a class="waves-effect waves-light" href="../index.php">Index</a></li>
            <li><a class="waves-effect waves-light" href="php/login.php">LOGIN for Admin</a></li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a class="waves-effect waves-light" href="#list-book">List Book</a></li>
    <li><a class="waves-effect waves-light" href="../index.php">Index</a></li>
    <li><a class="waves-effect waves-light" href="php/login.php">LOGIN for Admin</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/slider/1.jpg">
        <div class="caption center-align">
          <h3><i>"Membaca adalah alat paling Dasar
              untuk meraih hidup yang baik."</i></h3>
          <h5 class="light grey-text text-lighten-3"><i>~Joseph Addison.</i></h5>
        </div>
      </li>
      <li>
        <img src="assets/img/slider/2.jpg">
        <div class="caption left-align">
          <h3><i>"Membaca Novel Terjemahan itu sama saja dengan
              makan jeruk yang sudah hilang sarinya. Hambar."
            </i></h3>
          <h5 class="light grey-text text-lighten-3"><i>~Tyas Effendi</i></h5>
        </div>
      </li>
      <li>
        <img src="assets/img/slider/3.jpg">
        <div class="caption right-align">
          <h3><i>"Jangan Membaca sampai koma,
              tapi bacalah sampai titik."</i></h3>
          <h5 class="light grey-text text-lighten-3"><i>~2020</i></h5>
        </div>
      </li>
    </ul>
  </div>
  <!-- search -->
  <div class="container grey-text section scrollspy" id="list">
    <h3 class="header center">List Book</h3>
    <div class="input-field" style="margin-left: 40%">
      <form action="" method="GET">
        <input type="text" id="keyword" name="keyword" class="validate Black-text" autofocus placeholder="Cari">
        <button type="submit" name="cari" hidden>Cari!</button>
      </form>
    </div>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1 class="header center teal-text text-lighten">Data Tidak Ditemukan!</h1>
        </td>
      </tr>
    <?php else : ?>
      <div class="row">
        <?php foreach ($buku as $bk) : ?>
          <div class="col s12 m3">
            <div class="card" style="height: 300px">
              <div class="card-image">
                <img class="materialboxed" style="width: 150px" src="assets/img/<?= $bk['GAMBAR'] ?>">
              </div>
              <div class="card-content">
                <a href="php/detail.php?NO=<?= $bk['NO'] ?>"><?= $bk['JUDUL'] ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      </div>
  </div>

  <!--footer-->
  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="center">Contact Me</h3>
      <div class="row">
        <div class="col m5 12">
          <div class="card-panel grey darken-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Kontak saya tersedia (081)324053260 , E-Mail : xtkr4fakhriahmad@gmail.com , Instagram : @fakhri_ahmad31</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header center">
              <h4>My Address</h4>
            </li>
            <li class="collection-item">PERUM GRIYA UTAMA RANCAEKEK JL.JATI 3 NO.92, KAB.BANDUNG</li>
            <li class="collection-item">West Java, Indonesia</li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5 class="center">Please Fill out this Form For Support</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">E-Mail</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn black darken-4">SEND</button>
            </div>
          </form>
        </div>

      </div>
  </section>

  <!--footer-->
  <footer class="black darken-4 white-text center">
    <p class="flow-text">Fakhri Ahmad. Copyright 2020</p>
  </footer>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const boxed = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(boxed);

    const list = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(list);
  </script>
</body>

</html>