<?php

include_once "penghitung_persegi.php";

// Buat objek Persegi dengan sisi 5
$persegi = new Persegi(5);

// Buat objek PenghitungPersegi
$penghitung = new PenghitungPersegi();

// Hitung luas persegi
$luas = $penghitung->hitungLuas($persegi);

echo "Luas persegi dengan sisi 5 adalah: " . $luas;
?>
