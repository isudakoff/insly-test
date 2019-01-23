<?php

error_reporting (E_ALL);

define('DS', DIRECTORY_SEPARATOR);
define('PUBLIC_ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require_once ROOT . 'bootstrap/app.php';

use isudakoff\Insly\Second\Core\App;

$dispatch = new App();
$result = $dispatch->dispatch();

echo $result;

exit(0);