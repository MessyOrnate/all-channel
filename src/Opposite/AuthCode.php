<?php

namespace All\Channel\Opposite;

use All\Channel\BaseOpposite;

class AuthCode extends BaseOpposite
{
    // 接收请求的post和get参数

    // 进行验证

    // 验证通过后，把业务数据转发给业务逻辑

    public function handler(array $request, callable $callback)
    {
        // process, 验证签名，验证datetime...
        $this->post = $request['post'];
        $this->get = $request['get'];

        $this->validate();

        return $callback($this->post);
    }
}
