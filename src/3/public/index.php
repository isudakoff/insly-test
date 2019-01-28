<?php

define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

$filename = ROOT . '/sql/answer.sql';

echo '<pre>';
echo file_get_contents($filename);
