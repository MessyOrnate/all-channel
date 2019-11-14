<?php

define('BASE_DIR',  dirname(__DIR__, 1) . '/');
require_once BASE_DIR . 'vendor/autoload.php';

$config = include BASE_DIR . './demo/config.php';

$handler = new \All\Channel\Opposite\AuthCode($config);


$res = $handler->handler([
    'post' => $_POST,
    'get' => $_GET,
], function ($data){
    // 入库
//    ...
});

// $res;
