<?php
include "../../../inc/config.php";

if (!empty($_POST['judul'])) {
    $tgl = date("d-m-y");
    $iduser = $_SESSION['id'];
    $kategori = $_POST['kategori'];

    mysqli_query($mysqli, "INSERT INTO berita (id_kategori, judul, isi, tgl, id_user) VALUES ('$kategori', '$_POST[judul]', '$_POST[isi]', '$tgl', '$iduser')");

    header('location:../../dashboard.php?m=berita');
} else {
    header('location:../../dashboard.php?m=berita');
}
?>