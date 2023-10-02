<?php
include "../../../inc/config.php";

if (!empty($_POST['kategori'])) {
    $kategori = $_POST['kategori'];
    $query = "INSERT INTO kategori (nm_kategori) VALUES ('$kategori')";
    mysqli_query($mysqli, $query);

    header('location:../../dashboard.php?m=kategori');
} else {
    header('location:../../dashboard.php?m=kategori');
}
?>