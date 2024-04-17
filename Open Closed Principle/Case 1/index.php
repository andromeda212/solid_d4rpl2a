<?php

include_once "pembayaran_costumer.php";
include_once "tipe_pembayaran.php";

// Buat objek PembayaranCustomer
$pembayaran = new PembayaranCustomer();

// Buat objek tipe pembayaran (contoh: Debit)
$tipe_pembayaran = new Debit();

// Lakukan proses pembayaran dengan tipe yang dipilih
$pembayaran->menerimaPembayaran($tipe_pembayaran);
$pembayaran->prosesPembayaran();

?>
