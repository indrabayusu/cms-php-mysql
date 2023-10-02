<?php
include "../../../inc/config.php";

if (!empty($_POST['judul']) && isset($_POST['id'])) {
    mysqli_query($mysqli, "UPDATE halaman SET judul='$_POST[judul]', isi='$_POST[isi]' WHERE id='$_POST[id]'");

    header('location:../../dashboard.php?m=halaman');
} else {
    header('location:../../dashboard.php?m=halaman');
}
?>
