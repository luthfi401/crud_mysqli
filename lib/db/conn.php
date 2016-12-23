<?php

//membuat variable sebagai properti untuk penamaan sebuat konfigurasi koneksi database
$dbhost 	= 	"localhost";
$dbuser		=	"root";
$dbpass		=	"";
$dbname		=	"db_crud";

//membuat perintah koneksi mysqli
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

?>