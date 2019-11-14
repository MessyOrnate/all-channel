<?php

namespace All\Channel\Forward\Order;


class StatusSynchronize extends Status
{
    public function method()
    {
        return 'emall.orderstatus.synchronize';
    }

    public function sync($data)
    {
        //
        $response = $this->request($data);
        //
    }
}
