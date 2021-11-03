<?php 

$servername = "10.0.0.79";
$username = "admin";
$password = "Admin.123";
$dbname="db_arsip";

$koneksi = mysqli_connect('10.0.0.79', 'admin', 'Admin.123');
$db = mysqli_select_db($koneksi ,$dbname);

global $conn;
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>