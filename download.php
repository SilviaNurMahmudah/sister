<?php 
if (isset($_GET['file'])) {
    $filename = $_GET['file'];

    $dir = "https://objectstorage.ap-melbourne-1.oraclecloud.com/p/j1JwmilGBf2fegSxiYZC3LDTFUpFoZxz2AFWsTpP2jn1BZ9n2hGWCMErBlYaQpoN/n/axjhiho8mtpi/b/UTS-1931710054/o/file/";
    $file = $dir.$_GET['file'];

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; file='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: private');
        header('Pragma: private');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    } 
    else {
        $_SESSION['pesan'] = "Oops! File - $file_surat - not found ...";
        header("location:arsip.php");
    }
}

?>