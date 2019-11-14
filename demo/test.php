<?php


define('BASE_DIR',  dirname(__DIR__, 1) . '/');
require_once BASE_DIR . 'vendor/autoload.php';

$config = include BASE_DIR . './demo/config.php';

date_default_timezone_set("Asia/Shanghai");

$orderStatus = new \All\Channel\Forward\Order\StatusInfo(array_merge($config, ['token' => '你的token']));
$res = $orderStatus->get([1, 2, 3]);

var_dump($res);
