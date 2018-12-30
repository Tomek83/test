<?php

use misc\lib\config;

define('CONFIG_FILE', realpath(__DIR__) . '/config.yml');

config::instance(CONFIG_FILE);
