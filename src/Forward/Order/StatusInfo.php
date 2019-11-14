<?php
namespace All\Channel\Forward\Order;

/**
 * Class Status
 * 管家婆全渠道的订单状态管理
 * @package All\Channel\Forward\Order
 */
class StatusInfo extends Status
{

    public function method()
    {
        return 'emall.orderstatus.get';
    }

    /**
     * 获取状态
     * @param array $orderIds
     * @return string
     */
    public function get(array $orderIds)
    {
        $data = ['ordercodes' => $orderIds];
        $response = $this->request($data);

        if ($response->getStatusCode() == 200) {
            // TODO 验证接口响应的正确的逻辑，获取有效数据返回给业务流程
            return $response->getBody()->getContents();
        } else {
            return '';
        }
    }

    /**
     * 同步状态
     */
    public function synchronize()
    {

    }
}
