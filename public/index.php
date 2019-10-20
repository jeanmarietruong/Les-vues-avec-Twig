<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();

echo $hello -> talk();
echo '<br>';
echo SayHello::world();