<?php
include "../../../inc/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $query = "DELETE FROM berita WHERE id=?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header('location:../../dashboard.php?m=berita');
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
    mysqli_stmt_close($stmt);
} else {
    header('location:../../dashboard.php?m=berita');
}
?>