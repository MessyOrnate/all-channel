<?php
namespace All\Channel\Forward\Order;

use All\Channel\BaseForward;

/**
 * Class Status
 * @package All\Channel\Forward\Order
 */
class Synchronize extends BaseForward
{

    public function method()
    {
        return 'emall.order.synchronize';
    }

    public function sync()
    {

    }
}
