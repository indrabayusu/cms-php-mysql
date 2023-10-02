<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body {
        margin: 10px;
    }
</style>
<?php
if (isset($_GET['tipe'])) {
    if ($_GET['tipe'] == 'edit') {
        $sql = mysqli_query($mysqli, "SELECT * FROM komentar where id='$_GET[id]'");
        $de = mysqli_fetch_array($sql);
        echo "
            <h3>Edit Data Kategori</h3>
            <form method='post' action='module/komentar/proses_edit.php'>
                <input type='hidden' name='id' value='$de[id]' />
                <div class='form-group'>
                    <label for='aktif'>Status Aktif</label>
                    <select name='aktif' class='form-control'>
                        <option value='$de[aktif]' selected>$de[aktif]</option>
                        <option value='Y'>Y</option>
                        <option value='N'>N</option>
                    </select>
                </div>
                <button type='submit' class='btn btn-primary'>Update</button>
                <button type='button' class='btn btn-secondary' onClick='history.back();'>Batal</button>
            </form>";
    }
} else {
    echo "<h3>Manajemen Komentar</h3>
    <table class='table table-bordered' width='100%'>
        <thead>
            <tr>
                <th style='text-align: center;' width='65px'>No.</th>
                <th style='text-align: center;' width='100px'>Nama</th>
                <th style='text-align: center;'>Isi Komentar</th>
                <th style='text-align: center;'>Status Aktif</th>
                <th style='text-align: center;'>Aksi</th>
            </tr>
        </thead>
        <tbody>";
    $sql = mysqli_query($mysqli, "SELECT * FROM komentar ORDER BY id DESC");
    $no = 1;
    while ($k = mysqli_fetch_array($sql)) {
        echo "<tr>
                <td align='center'>$no</td>
                <td style='padding-left: 15px;'>$k[nama]</td>
                <td style='padding-left: 15px; padding-right: 15px; text-align: justify;'>$k[komentar]</td>
                <td style='text-align: center;' width='110px'>$k[aktif]</td>
                <td align='center' width='150px'>
                    <a href='?m=komentar&tipe=edit&id=$k[id]' class='btn-sm btn-primary'>Edit</a>
                    <a href='module/komentar/proses_hapus.php?id=$k[id]'
                        onClick='return confirm(\"Anda yakin akan menghapus?\")' class='btn-sm btn-danger'>Hapus</a>
                </td>
            </tr>";
        $no++;
    }
    echo "</tbody></table>";
}
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>