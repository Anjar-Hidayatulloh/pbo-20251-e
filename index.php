<?php
//panggil 
require_once('./luaslingkaran.php');

use app/math/luaslingkaran;

$lingkaran = new luaslingkaran(16);
//$lingkaran->jari = 16;
$lingkaran->tampil('roda'); //panggil method

luaslingkaran::testing();