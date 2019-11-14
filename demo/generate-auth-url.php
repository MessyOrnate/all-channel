<?php

define('BASE_DIR',  dirname(__DIR__, 1) . '/');
require_once BASE_DIR . 'vendor/autoload.php';
$config = include BASE_DIR . './demo/config.php';


$ac = new \All\Channel\Forward\AuthCode($config);
$url = $ac->url('https://www.shop.com', 'test');

print_r($url);


