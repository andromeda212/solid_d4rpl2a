<?php

// Include semua file yang diperlukan
include_once "barangelektronik.php";
include_once "kipasangin.php";
include_once "lampu.php";

// Buat objek KipasAngin dan Saklar untuk mengoperasikannya
$kipasAngin = new KipasAngin();
$saklarKipas = new Saklar($kipasAngin);

// Operasikan kipas angin dengan saklar
$saklarKipas->berubah();
$saklarKipas->berubah();

// Buat objek Lampu dan Saklar untuk mengoperasikannya
$lampu = new Lampu();
$saklarLampu = new Saklar($lampu);

// Operasikan lampu dengan saklar
$saklarLampu->berubah();
$saklarLampu->berubah();

?>
