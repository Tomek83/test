<?php

require_once 'vendor/autoload.php';

use misc\lib\config;
use test\app\dump;

$dump = new dump();

$dump->echo_config();

//var_dump(config::instance());
