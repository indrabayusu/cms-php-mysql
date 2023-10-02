<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<body>
<?php

if (isset($_GET['m'])) {
	if ($_GET['m']=='kategori') {
		include "module/kategori/kategori.php";
	} elseif($_GET['m']=='berita') {
		include "module/berita/berita.php";
	} elseif($_GET['m']=='halaman') {
		include "module/halaman/halaman.php";
	} elseif($_GET['m']=='komentar') {
		include "module/komentar/komentar.php";
	} else {
		echo "Module tidak ditemukan..";
	}
} else {
	echo "<div style='text-align: center;'>
		    <h3>
		        Selamat Datang, $_SESSION[nama] ! <i class='fas fa-check-circle' style='color: #5cb85c;'></i>
		    </h3>
		    <div style='text-align: center;'>
		    	<h4 style='padding-top: 30px; padding-bottom: 10px;'>Dashboard Utama, Anda memiliki kendali sepenuhnya</h4>
		    	<i class='fas fa-user' style='font-size: 72px; padding-bottom: 10px;'></i>
		    	<h4>Semoga harimu menyenangkan!</h4>
		    </div> 
		</div>";
}

?>

</body>