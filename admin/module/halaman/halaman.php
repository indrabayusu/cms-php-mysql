<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body {
        margin: 10px;
    }
</style>
<?php
if (isset($_GET['tipe'])) {
    if ($_GET['tipe'] == 'edit') {
        $sql = mysqli_query($mysqli, "SELECT * FROM halaman where id='$_GET[id]'");
        $de = mysqli_fetch_array($sql);
        echo "
            <h3>Edit Data</h3>
            <form method='post' action='module/halaman/proses_edit.php'>
                <input type='hidden' name='id' value='$de[id]' />
                <div class='form-group'>
                    <label for='judul'>Judul Halaman Statis</label>
                    <input type='text' name='judul' size='100' value='$de[judul]' class='form-control' />
                </div>
                <div class='form-group'>
                    <label for='isi'>Isi</label>
                    <textarea name='isi' name='editor1' id='editor1' class='form-control'>$de[isi]</textarea>
                </div>
                <button type='submit' class='btn btn-primary'>Update</button>
                <button type='button' class='btn btn-secondary' onClick='history.back();'>Batal</button>
            </form>
        ";
    }
} else {
    echo "<h3>Manajemen Halaman Statis</h3>
    <table class='table table-bordered' width='100%'>
        <thead>
            <tr>
                <th style='text-align: center;'>No</th>
                <th style='text-align: center;'>Judul</th>
                <th style='text-align: center;'>Aksi</th>
            </tr>
        </thead>
        <tbody>";
    $sql = mysqli_query($mysqli, "SELECT * FROM halaman ORDER BY id ASC");
    $no = 1;
    while ($k = mysqli_fetch_array($sql)) {
        echo "<tr>
                <td align='center' width='60'>$no</td>
                <td style='padding-left: 25px; padding-right: 25px; text-align: justify;'>$k[judul]</td>
                <td align='center' width='100px'>
                    <a href='?m=halaman&tipe=edit&id=$k[id]' class='btn btn-sm btn-primary'>Edit</a>
                </td>
            </tr>";
        $no++;
    }
    echo "</tbody></table>";
}
?>
<script src="../../assets/kcfinder/js/kcfinder.js"></script>
<script type="text/javascript">
    function BrowseServer() {
        var finder = new CKFinder();
        finder.basePath = 'kcfinder/'; // Path to KCFinder directory
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }

    function SetFileField(fileUrl) {
        document.getElementById('editor1').value = fileUrl;
    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>