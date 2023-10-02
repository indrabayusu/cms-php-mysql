<?php
if (isset($_GET['id'])) {
    // tampilkan detail berita
    $sqlDetil = mysqli_query($mysqli, "SELECT berita.*, kategori.nm_kategori, user.nama_lengkap FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id INNER JOIN user ON berita.id_user = user.id WHERE berita.id='$_GET[id]'");
    $dbrt = mysqli_fetch_array($sqlDetil);
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><b><?php echo $dbrt['judul']; ?></b></h3>
        </div>
        <div class="panel-body" style="text-align: justify;">
            <?php echo $dbrt['isi']; ?>
        </div>
        <div class="panel-footer">
            <span>Ditulis Oleh: <?php echo $dbrt['nama_lengkap']; ?>;</span>
            <span class="pull-right">Diposting pada : <?php echo $dbrt['tgl']; ?></span>
        </div>
    </div>

    <!-- Tampil Komentar -->
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Semua Komentar</h3>
        </div>
        <div class="panel-body">
            <ul class="media-list">
            <?php
            $sqlKomen = mysqli_query($mysqli, "SELECT * FROM komentar WHERE id_berita='$dbrt[id]' AND aktif='Y' ORDER BY id DESC");
            while ($dk = mysqli_fetch_array($sqlKomen)) {
            ?>
                <li class="media" style="border-bottom: solid 1 px #ebebeb; padding-bottom: 4px;">
                    <div class="media-body" style="text-align: justify;">
                        <h4><a href="mailto:<?php echo $dk['email']; ?>"><?php echo $dk['nama']; ?></a></h4>
                        <?php echo $dk['komentar']; ?> [ <?php echo $dk['tgl']; ?> ]
                    </div>
                </li>

            <?php
            }
            ?>
            </ul>
        </div>
    </div>

    <!-- Form Komentar -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Tinggalkan Komentar</h3>
        </div>
        <div class="panel-body">
            <form method='post' action="simpan_komentar.php">
                <input type="hidden" name="idberita" value="<?php echo $dbrt['id']; ?>">
                <div class="form-group">
                    <label>Nama Anda</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Anda</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Isi Komentar</label>
                    <textarea name="isi" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Komentar">
                </div>
            </form>
        </div>
    </div>
    <?php

} elseif (isset($_GET['ktg'])) {
    // tampilkan berita berdasarkan kategori
    $sqlKtg = mysqli_query($mysqli, "SELECT * FROM kategori WHERE id='$_GET[ktg]'");
    $ktg = mysqli_fetch_array($sqlKtg);
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Berita <b><?php echo $ktg['nm_kategori']; ?></b></h3>
        </div>
        <div class="panel-body">
            <ul>
                <?php
                $sqlBerita = mysqli_query($mysqli, "SELECT * FROM berita WHERE id_kategori='$_GET[ktg]' ORDER BY id DESC");
                while ($brt = mysqli_fetch_array($sqlBerita)) {
                    echo "<li style='margin-bottom: 10px;'>
                       <a href='?hal=berita&id=$brt[id]'>$brt[judul]</a>
                       </li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
} else {
    // tampilkan daftar berita
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Berita Terkini</h3>
        </div>
        <div class="panel-body">
            <ul>
                <?php
                $sqlBerita = mysqli_query($mysqli, "SELECT * FROM berita ORDER BY id DESC");
                while ($brt = mysqli_fetch_array($sqlBerita)) {
                    echo "<li style='margin-bottom: 10px;'>
                       <a href='?hal=berita&id=$brt[id]'>$brt[judul]. <p style='float: right;'>[$brt[tgl]]</p></a>
                       </li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
}

?>