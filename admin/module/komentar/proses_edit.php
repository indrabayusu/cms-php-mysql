<?php
include "../../../inc/config.php";

    mysqli_query($mysqli, "UPDATE komentar SET aktif='$_POST[aktif]' WHERE id='$_POST[id]'");

    header('location:../../dashboard.php?m=komentar');
?>
