<?php

define('ROOT_DIR', realpath(__DIR__ . '/../'));
define('DOC_DIR', ROOT_DIR . '/docs');
define('VIEW_DIR', ROOT_DIR . '/resources/views/');
define('CACHE_DIR', ROOT_DIR . '/.cache/');


require_once __DIR__ . '/routes.php';
require_once __DIR__ . '/console.php';
