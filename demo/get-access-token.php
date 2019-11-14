<?php

define('BASE_DIR',  dirname(__DIR__, 1) . '/');
require_once BASE_DIR . 'vendor/autoload.php';

$config = include BASE_DIR . './demo/config.php';

$accessToken = new \All\Channel\Forward\AccessToken($config);

$accessToken->load(['authCode' => 'xxsss']);

$res = $accessToken->get();

var_dump($res);
