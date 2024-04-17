<?php

include_once "dbms.php";
include_once "database_connections.php";

// Buat objek DBMSConnection
$dbmsConnection = new DBMSConnection();

// Buat objek MySQL
$mysql = new MySQL();
// Buat objek MongoDB
$mongodb = new MongoDB();

// Lakukan koneksi menggunakan MySQL
$dbmsConnection->connect($mysql);
$mysql->createConnection();

// Lakukan koneksi menggunakan MongoDB
$dbmsConnection->connect($mongodb);
$mongodb->createConnection();

?>
