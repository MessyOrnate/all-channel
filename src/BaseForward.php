<?php

namespace All\Channel;

use GuzzleHttp\Client;

abstract class BaseForward extends Base
{
    public $token = '';

    public $path = '/Service/ERPService.asmx/EMallApi';

    abstract function method();

    public function __construct(array $config=[])
    {
        $this->load($config);
    }

    protected function sign($body, $datetime)
    {
        $string = implode('', [
            $this->appSecret,
            'app_key',                  $this->appKey,
            'formatjsonmethod',         $this->method(),
            'sign_methodmd5timestamp',  $datetime,
            'token',                    $this->token,
            'v',                        '1.0',
            $body, $this->appSecret,
        ]);
        $sign = strtoupper(md5($string));
        return $sign;
    }

    public function request(array $data)
    {
        $body = json_encode($data);
        $datetime = date('Y-m-d H:i:s');
        $query = http_build_query([
            'method'        => $this->method(),
            'timestamp'     => $datetime,
            'format'        => 'json',
            'app_key'       => $this->appKey,
            'token'         => $this->token,
            'v'             => '1.0',
            'sign'          => $this->sign($body, $datetime),
            'sign_method'   => 'md5'
        ]);
        $client = new Client();

        var_dump("{$this->serviceHost}{$this->path}?{$query}");

        $response = $client->post("{$this->serviceHost}{$this->path}?{$query}", [
            'body' => $body
        ]);
        return $response;
    }

    // TODO 获得code值

    // TODO 获得TOKEN

    // TODO 根据TOKEN请求以下接口
    //订单状态获取
    //订单状态同步
    //订单信息同步
    //售后订单信息同步
    //往来单位获取
}
