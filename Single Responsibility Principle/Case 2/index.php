<?php

include_once "mahasiswa.php";
include_once "mahasiswa_view.php";

// Buat objek Mahasiswa
$mahasiswa = new Mahasiswa("2205023", "Nur Elif");

// Buat objek MahasiswaView
$view = new MahasiswaView();

// Tampilkan informasi mahasiswa menggunakan MahasiswaView
$view->showMahasiswa($mahasiswa);

?>
