<?php

namespace All\Channel\Forward\Order;


class StatusSynchronize extends Status
{
    public function method()
    {
        return 'emall.orderstatus.synchronize';
    }
}
