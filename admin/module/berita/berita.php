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
            <h3>Tambah Data</h3>
            <form method='post' action='module/berita/proses_tambah.php'>
                <div class='form-group'>
                    <label for='judul'>Judul Berita</label>
                    <input type='text' name='judul' class='form-control' id='judul' size='100' />
                </div>
                <div class='form-group'>
                    <label for='kategori'>Kategori</label>
                    <select name='kategori' class='form-control'>";
                    ?>
                        <option disabled selected>Pilih Kategori Berita</option>
                    <?php
                    $sql=mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY nm_kategori ASC");
                    while ($k=mysqli_fetch_array($sql)) {
                        echo "<option value='$k[id]'>$k[nm_kategori]</option>";
                    }
                    echo "</select>
                </div>
                <div class='form-group'>
                    <label for='isi'>Isi Berita</label>
                    <textarea name='isi' class='form-control'></textarea>
                </div>
                <button type='submit' class='btn btn-primary'>Simpan</button>
                <button type='button' class='btn btn-secondary' onClick='history.back();'>Batal</button>
            </form>";
    } elseif ($_GET['tipe'] == 'edit') {
        $sql = mysqli_query($mysqli, "SELECT * FROM berita where id='$_GET[id]'");
        $de = mysqli_fetch_array($sql);
        echo "
            <h3>Edit Data</h3>
            <form method='post' action='module/berita/proses_edit.php'>
                <input type='hidden' name='id' value='$de[id]' />
                <div class='form-group'>
                    <label for='judul'>Judul Berita</label>
                    <input type='text' name='judul' class='form-control' id='judul' size='100' value='$de[judul]' />
                </div>
                <div class='form-group'>
                    <label for='kategori'>Kategori</label>
                    <select name='kategori' class='form-control'>";
                    $sql=mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY nm_kategori ASC");
                    while ($k=mysqli_fetch_array($sql)) {
                        echo "<option value='$k[id]'>$k[nm_kategori]</option>";
                    }
                    echo "</select>
                </div>
                <div class='form-group'>
                    <label for='isi'>Isi Berita</label>
                    <textarea name='isi' class='form-control'>$de[isi]</textarea>
                </div>
                <button type='submit' class='btn btn-primary'>Update</button>
                <button type='button' class='btn btn-secondary' onClick='history.back();'>Batal</button>
            </form>";
    }
} else {
?>
        <h3>Manajemen Berita</h3>
        <a href='?m=berita&tipe=tambah' class='btn btn-primary'>Tambah Data</a>
        <div style='margin-bottom: 10px;'></div>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th style='text-align: center;' width='65px'>No.</th>
                    <th style='text-align: center;'>Judul</th>
                    <th style='text-align: center;'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($mysqli, "SELECT * FROM berita ORDER BY id ASC");
                $no = 1;
                while ($k = mysqli_fetch_array($sql)) {
                    echo "<tr>
                            <td align='center'>$no</td>
                            <td style='padding-left: 15px; padding-right: 15px; text-align: justify;'>$k[judul]</td>
                            <td align='center' width='150px'>
                                <a href='?m=berita&tipe=edit&id=$k[id]' class='btn-sm btn-primary'>Edit</a>
                                <a href='module/berita/proses_hapus.php?id=$k[id]'
                                    onClick='return confirm(\"Anda yakin akan menghapus?\")' class='btn-sm btn-danger'>Hapus</a>
                            </td>
                        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
<?php
}
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>