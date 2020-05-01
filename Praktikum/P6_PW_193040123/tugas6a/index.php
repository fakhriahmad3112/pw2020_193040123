<?php

require 'php/functions.php';

if (isset($_GET['carikan'])) {
    $kata = $_GET['kata'];
    $buku = query("SELECT * FROM buku WHERE
                nama_buku LIKE '%$kata%' ");
} else {
    //melakukan query
    $buku = query("SELECT * FROM buku");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tugas 6a</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <li><a href="php/admin.php">LOGIN</a></li>
    <li>
        <form action="" method="GET">
            <button type="submit" name="carikan">Cari!</button>
    </li>
    <li>
        <input type="text" id="kata" name="kata" class="validate" autofocus>
        <label for="kata" class="active">CARI</label>
        </div>
        </div>
        </form>
    </li>

    </ul>
    </div>
    </nav>

    <div class="row">

        <div class="container">
            <center>
                <h1>JUDUL BUKU</h1>
            </center>
            <?php if (empty($buku)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php foreach ($buku as $bk) : ?>

                    <center>
                        <img src="assets/img/<?= $bk["GAMBAR"]; ?>" width="100px">
                        <br>
                        <a href="php\detail.php?id=<?= $bk['id'] ?>">
                            <?= $bk["JUDUL"] ?>
                        </a>
                    </center>
                    <br>
                <?php endforeach; ?>
        </div>
    <?php endif; ?>

</body>

</html>