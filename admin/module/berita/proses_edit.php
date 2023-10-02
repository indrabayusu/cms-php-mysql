<?php
include "../../../inc/config.php";

if (!empty($_POST['judul']) && isset($_POST['id'])) {
    // Mendefinisikan kueri UPDATE dengan placeholder (?)
    $query = "UPDATE berita SET id_kategori=?, judul=?, isi=? WHERE id=?";

    // Mempersiapkan kueri dengan prepared statement
    $stmt = mysqli_prepare($mysqli, $query);

    if ($stmt) {
        // Bind parameter ke prepared statement
        mysqli_stmt_bind_param($stmt, "issi", $_POST['kategori'], $_POST['judul'], $_POST['isi'], $_POST['id']);

        // Eksekusi prepared statement
        if (mysqli_stmt_execute($stmt)) {
            header('location:../../dashboard.php?m=berita');
        } else {
            // Penanganan kesalahan jika eksekusi gagal
            echo "Update gagal: " . mysqli_stmt_error($stmt);
        }

        // Tutup prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // Penanganan kesalahan jika prepared statement gagal
        echo "Gagal membuat prepared statement: " . mysqli_error($mysqli);
    }
} else {
    header('location:../../dashboard.php?m=berita');
}
?>