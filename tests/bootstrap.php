<?php
spl_autoload_register(function ($class) {
    if (strpos($class, "AddedBytes\\") === 0) {
        $pathname = __DIR__ . '/../src/' . str_replace('\\', '/', substr($class, 11)) . '.php';
        if (file_exists($pathname)) {
            require $pathname;
            return true;
        }
    }
    return false;
});