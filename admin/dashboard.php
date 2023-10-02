<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('location:index.php');
	exit; 
}

include "../inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin - CMS</title>
	<script src="../assets/ckeditor/ckeditor.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style type="text/css">
		body {
			background-color: #fff;
			margin: 10px;
		}
		.menu ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		.menu ul li a {
			display: block;
			list-style: none;
			background-color: #000;
			color: #fff;
			text-decoration: none;
			margin: 2px;
			padding: 16px;
		}
		.menu ul li a:hover {
			background-color: #337ab7;
			color: #fff;
		}
		.content {
			padding: 10px;
		}
		.content h3 {
			display: block;
			border-bottom: 1px solid black;
			margin-top: 0px;
			padding-bottom: 5px;
		}
		.content label {
			display: block;
			float: left;
			width: 160px;
		}
		.content form {
			border: 1px solid #ebebeb;
			line-height: 200%;
			padding: 10px;
		}
	</style>
</head>
<body>
	<table width="100%">
		<tr>
			<td colspan="2" bgcolor="#000" style="color: #fff; text-align: center; padding: 15px;"><h1>Dashboard Administrator - CMSku</h1></td>
		</tr>
		<tr>
			<td valign="top" width="250px">
				<div class="menu">
				    <ul>
				        <li><a href="./dashboard.php"><i class="fas fa-home"></i> &nbsp; Home </a></li>
				        <li><a href="./dashboard.php?m=kategori"><i class="fas fa-list"></i> &nbsp; Manajemen Kategori </a></li>
				        <li><a href="./dashboard.php?m=berita"><i class="fas fa-newspaper"></i> &nbsp; Manajemen Berita </a></li>
				        <li><a href="./dashboard.php?m=komentar"><i class="fas fa-comments"></i> &nbsp; Manajemen Komentar </a></li>
				        <li><a href="./dashboard.php?m=halaman"><i class="fas fa-file-alt"></i> &nbsp; Manajemen Halaman </a></li>
				        <li><a href="./logout.php"><i class="fas fa-sign-out-alt"></i> &nbsp; Logout </a></li>
				    </ul>
				</div>
			</td>
			<td valign="top">
				<div class="content">
					<?php include "content.php"; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" bgcolor="#000" style="color: #fff; text-align: center; padding: 15px">Copyright &copy; 2022 CMSku</td>
		</tr>
	</table>

<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: '../assets/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: '../assets/kcfinder/browse.php?type=images',
        filebrowserUploadUrl: '../assets/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: '../assets/kcfinder/upload.php?type=images'
    });
</script>
</body>
</html>