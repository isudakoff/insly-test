<?php

session_start();

require_once '../config/app.php';

function dd(...$args)
{
    echo '<pre>';

    foreach ($args as $arg) {
        var_dump($arg);
    }

    die;
}

function insly_autoload($class)
{
    $prefix = 'isudakoff\\Insly\\Second\\';

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = ROOT . str_replace('\\', DS, $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('insly_autoload');