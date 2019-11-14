<?php

namespace All\Channel\Forward;

use All\Channel\BaseForward;

class AccessToken extends BaseForward
{
    public $authCode = '';

    public function method()
    {
        return 'emall.token.get';
    }

    /**
     * 获取access token不需要签名，覆写原来的签名
     * @param $body
     * @param $datetime
     * @return string
     */
    public function sign($body, $datetime)
    {
        return '';
    }

    public function get()
    {
        $data = [
            'appkey'    => $this->appKey,
            'appsecret' => $this->appSecret,
            'oauthcode' => $this->authCode
        ];
        $response = $this->request($data);
//        解析response, 响应token
        return 'token';
    }
}
