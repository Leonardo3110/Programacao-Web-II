<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\HandLer\StreamHandLer;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('your.log', Level::Warning));

$log->warning('Foo');
$log->error('Bar');

