<?php

namespace All\Channel\Forward;

use All\Channel\Base;

class AuthCode extends Base
{
    protected $path = '/EMallOauth.gspx';

    /**
     * 生成授权地址，在自建商城中获取
     * @param $redirectUrl
     * @param string $status 可以用于生成用于校验数据的标识
     * @return string
     */
    public function url($redirectUrl, $status='')
    {
        $query = http_build_query([
            'appkey'        => $this->appKey,
            'appsecret'     => $this->appSecret,
            'redirect_url'  => $redirectUrl,
            'state'         => $status
        ]);
        return "{$this->serviceHost}{$this->path}?$query";
    }

    public static function handler(array $queryParam, $callback)
    {
        if (isset($queryParam['code']) && isset($queryParam['state'])) {
            return $callback($queryParam['code'], $queryParam['state']);
        } else {
            return null;
        }
    }
}
