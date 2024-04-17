<?php

include_once "kendaraan_bbm.php";
include_once "kendaraan_listrik.php";

// Buat objek Mobil
$mobil = new Mobil();
$mobil->menggunakanBBM();

// Buat objek MobilListrik
$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBaterai();

?>
