<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "dbmahasiswa";
$mysqli = new mysqli($server, $username, $password, $db);
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
}
date_default_timezone_set("Asia/Jakarta");
?>
