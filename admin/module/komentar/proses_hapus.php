<?php
include "../../../inc/config.php";

if (isset($_GET['id'])) {
    mysqli_query($mysqli, "DELETE FROM komentar WHERE id='$_GET[id]'");

    header('location:../../dashboard.php?m=komentar');
} else {
    header('location:../../dashboard.php?m=komentar');
}
?>