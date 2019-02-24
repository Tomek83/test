<?php

require_once 'vendor/autoload.php';

use misc\lib\config;
use misc\lib\file;
use misc\lib\lol;
use misc\lib\johny;
use test\app\dump;

$dmp = new dump();

$dmp->echo_config();

var_dump(file::read('config.yml')->getArray());

$lol = new lol();

$lol->helo();

$lol = new johny();

$lol->johny();


echo "\nend script\n";

//var_dump(config::instance());
