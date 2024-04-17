<?php

include_once "shape2dimension.php";
include_once "shape3dimension.php";

// Buat objek Persegi
$persegi = new Persegi(10);
$persegi->calculateArea();

// Buat objek Kubus dengan Persegi sebagai parameter
$kubus = new Kubus($persegi);

?>
