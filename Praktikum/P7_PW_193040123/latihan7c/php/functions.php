<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040123") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $GAMBAR = htmlspecialchars($data['GAMBAR']);
    $JUDUL = htmlspecialchars($data['JUDUL']);
    $TAHUNTERBIT = htmlspecialchars($data['TAHUN TERBIT']);
    $PENGARANG = htmlspecialchars($data['PENGARANG']);
    $GENRE = htmlspecialchars($data['GENRE']);

    $query = "INSERT INTO buku
                        VALUES
                        ('','$GAMBAR','$JUDUL','$TAHUNTERBIT','$PENGARANG','$GENRE')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['GAMBAR']);
    $judul = htmlspecialchars($data['JUDUL']);
    $tahun_terbit = htmlspecialchars($data['TAHUN TERBIT']);
    $pengarang = htmlspecialchars($data['PENGARANG']);
    $genre = htmlspecialchars($data['GENRE']);

    $query = "UPDATE buku 
                SET 
                GAMBAR = '$gambar',
                JUDUL = '$judul',
                TAHUN TERBIT = '$tahun_terbit',
                PENGARANG = '$pengarang',
                GENRE = '$genre',
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
