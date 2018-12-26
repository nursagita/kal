<?php
$servername = "localhost";
$user       = "root";
$password   = "sagita99";
$db         = "perpus";

$koneksi = mysql_connet ($servername, $user, $password)
			or die ('gagal terkoneksi'.mysql_error());

$database = mysql_select_db ($db)
			or die('gagal terhubung ke database'.mysql_error());


?>