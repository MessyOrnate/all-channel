<?php

namespace All\Channel;

class BaseOpposite extends Base
{
    protected $post = [];
    protected $get = [];


    public function validate()
    {
        // 验证签名
        $this->sign(json_encode($this->post), $this->get['timestamp']);
        return true;
    }
}
