<?php

//membuat variable sebagai properti untuk penamaan sebuat konfigurasi koneksi database
$dbhost 	= 	"lcoalhost";
$dbuser		=	"root";
$dbpass		=	"crud";
$dbname		=	"db_crud";

//membuat perintah koneksi mysqli
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

?>