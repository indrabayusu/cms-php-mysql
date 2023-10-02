<?php
include "../../../inc/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if ($mysqli) {
        $query = "DELETE FROM kategori WHERE id=?";
        $stmt = mysqli_prepare($mysqli, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        
        header('location:../../dashboard.php?m=kategori');
    } else {
        echo "Database connection is not available.";
    }
} else {
    header('location:../../dashboard.php?m=kategori');
}
?>