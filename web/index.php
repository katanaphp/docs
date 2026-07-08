<?php

use App\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/bootstrap.php';

if (!is_dir(CACHE_DIR) && !mkdir(CACHE_DIR)) {
    die("Cannot create cache directory");
}

if (php_sapi_name() === 'cli') {
    $console->run();
} else {
    $response = Route::dispatch();

    if ($response === null) {
        http_response_code(404);
        echo '404';
    } else {
        echo $response;
    }
}
