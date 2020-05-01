<?php 

    require 'php/functions.php';

    $buku = query("SELECT * FROM buku")

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Latihan 5c</title>
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
   <div class="container">
       <?php foreach ($buku as $bk) : ?>
            <p class="JUDUL">
                <a href="php/detail.php?NO=<?= $bk['NO'] ?>">
                    <?= $bk["JUDUL"] ?>
                </a>
            </p>
        <?php endforeach; ?>
   </div>
</body>
</html>
