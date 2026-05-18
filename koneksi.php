<?php

$hostname = "localhost";
$username = "root";
$password = '';
$database = 'pusdigif.sql';

$koneksi = mysqli_connect ($hostname, $username, $password, $database);

if (!$koneksi) {
  die ("koneksi gagal: " . mysqli_connect_error());
}
?>