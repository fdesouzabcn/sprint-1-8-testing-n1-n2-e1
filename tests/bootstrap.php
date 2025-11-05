<?php
// This file runs before the tests, used for autoloading.
error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../src/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
echo "Bootstrap loaded successfully.\n";
