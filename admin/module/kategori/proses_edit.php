<?php
include "../../../inc/config.php";

if (!empty($_POST['kategori'])) {
    $kategori = $_POST['kategori'];
    $id = $_POST['id'];
    $query = "UPDATE kategori SET nm_kategori=? WHERE id=?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "si", $kategori, $id);
    mysqli_stmt_execute($stmt);

    header('location:../../dashboard.php?m=kategori');
} else {
    header('location:../../dashboard.php?m=kategori');
}
?>
