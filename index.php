<?php

require 'vendor/autoload.php';

use Itiden\Namespace1\Foo;
use Itiden\Namespace2\Bar;

$foo = new Foo();
$foo->test();

echo ' | ';

$bar = new Bar();
$bar->test();