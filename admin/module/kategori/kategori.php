<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body {
        margin: 10px;
    }
</style>
<?php
if (isset($_GET['tipe'])) {
    if ($_GET['tipe'] == 'tambah') {
        echo "
            <h3>Tambah Data Kategori</h3>
            <form method='post' action='module/kategori/proses_tambah.php'>
                <label>Nama Kategori</label>
                <input type='text' name='kategori' size'40' /><br>
                <label>&nbsp;</label>
                <div style='margin-top: 10px;'></div>
                <input type='submit' class='btn btn-primary' value='Simpan'/>
                <input type='button' class='btn btn-secondary' value='Batal' onClick='history.back();'/>

            </form>";
    } elseif ($_GET['tipe'] == 'edit') {
        $sql = mysqli_query($mysqli, "SELECT * FROM kategori where id='$_GET[id]'");
        $de = mysqli_fetch_array($sql);
        echo "
            <h3>Edit Data Kategori</h3>
            <form method='post' action='module/kategori/proses_edit.php'>
                <input type='hidden' name='id' value='$de[id]' />
                <label>Nama Kategori</label>
                <input type='text' name='kategori' size'40' value='$de[nm_kategori]' /><br>
                <label>&nbsp;</label>
                <div style='margin-top: 10px;'></div>
                <input type='submit' class='btn btn-primary' value='Update'/>
                <input type='button' class='btn btn-secondary' value='Batal' onClick='history.back();'/>

            </form>";
    }
} else {
    echo "<h3>Manajemen Kategori</h3>
    <a href='?m=kategori&tipe=tambah' class='btn btn-primary'>Tambah Data</a>
    <div style='margin-bottom: 10px;'></div>
    <table class='table table-bordered' style='margin-bottom: -3px;'>
        <thead>
        <tr>
            <th style='text-align: center;' width='65px'>No.</th>
            <th style='text-align: center;'>Nama Kategori</th>
            <th style='text-align: center;'>Aksi</th>
        </tr>";
    $sql = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY nm_kategori ASC");
    $no = 1;
    while ($k = mysqli_fetch_array($sql)) {
        echo "<tr>
                <td align='center'>$no</td>
                <td style='padding-left: 25px; padding-right: 25px; text-align: justify;'>$k[nm_kategori]</td>
                <td align='center' width='150px'>
                    <a href='?m=kategori&tipe=edit&id=$k[id]' class='btn-sm btn-primary'>Edit</a>
                    <a href='module/kategori/proses_hapus.php?id=$k[id]'
                        onClick='return confirm(\"Anda yakin akan menghapus?\")' class='btn-sm btn-danger'>Hapus</a>
                </td>
            </tr>";
        $no++;
    }
    echo "</table>";
}
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>