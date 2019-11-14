<?php

define('BASE_DIR',  dirname(__DIR__, 1) . '/');
require_once BASE_DIR . 'vendor/autoload.php';

$config = include BASE_DIR . './demo/config.php';

$accessToken = new \All\Channel\Forward\AccessToken($config);

$accessToken->load(['authToken' => 'xxsss']);

$res = $accessToken->token();

var_dump($res);
