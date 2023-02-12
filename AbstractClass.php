<?php

require_once("data/Location.php");

use data\{Lokasi, Kota, Provinsi, Negara};

// $lokasi = new Lokasi(); ERROR karena tidak dapat inheritence abstract class
$kota = new Kota();
$provinsi = new Provinsi();
$negara = new Negara();