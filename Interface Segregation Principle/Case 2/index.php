<?php

// Include semua file yang diperlukan
include_once "fiturfax.php";
include_once "fiturcetak.php";
include_once "fiturscan.php";
include_once "printerentrylevel.php";
include_once "printerflagship.php";
include_once "printermidrange.php";
include_once "printerflagshipfax.php";

// Buat objek PrinterFlagship dengan fitur fax
$printerFlagship = new PrinterFlagship(new PrinterFlagshipFax());
$printerFlagship->terimaFax();
$printerFlagship->cetakKertas();
$printerFlagship->scanKertas();

?>
