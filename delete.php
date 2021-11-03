<?php 
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM arsip_surat WHERE id='$id'") or die(mysql_error());
$file_surat = $_POST['file_surat'];
unlink("https://objectstorage.ap-melbourne-1.oraclecloud.com/p/j1JwmilGBf2fegSxiYZC3LDTFUpFoZxz2AFWsTpP2jn1BZ9n2hGWCMErBlYaQpoN/n/axjhiho8mtpi/b/UTS-1931710054/o/file/".$file_surat);

header("location:arsip.php?pesan=hapus");
?>