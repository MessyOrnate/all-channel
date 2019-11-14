<?php

// 接收全渠道回调的传送过来的auth code

//$query = [
//    'code' => 'code',
//    'status' => 'status',
//];

$query = $_GET;

if (\All\Channel\Forward\AuthCode::handler($query, function ($code, $status){
    // 存储code 或者把code换成token
})) {
    // TODO 响应前端页面成功
} else {
    // TODO 响应前端页面异常
}
