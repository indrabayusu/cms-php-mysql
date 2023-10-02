<?php
include "./inc/config.php";

if(isset($_POST['idberita']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['isi'])) {
    $tgl = date("Y-m-d");
    $idb = $_POST['idberita'];
    $status = 'Y';

    $simpan = mysqli_query($mysqli, "INSERT INTO komentar 
                    (nama, email, komentar, aktif, tgl, id_berita)
                    VALUES ('$_POST[nama]',
                        '$_POST[email]',
                        '$_POST[isi]',
                        '$status',
                        '$tgl',
                        '$idb')");
    
    header('location:?hal=berita&id='.$idb);
}
?>