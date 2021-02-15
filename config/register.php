<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email = $_POST["email"];
$nama = $_POST["nama"];
$password = $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `tabel_register` (`username`, `email`, `nama`, `password`)
VALUES (?, ?, ?, SHA1(?));");
$q->execute([$username, $email, $nama, $password]);
header("Location ../index.php");
?>