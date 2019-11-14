<?php

namespace All\Channel\Forward\Order;

use All\Channel\BaseForward;

abstract class Status extends BaseForward
{
    public static $map = [
        'NoPay'         => '未付款',
        'Payed'         => '已付款',
        'Sended'        => '已发货',
        'TradeSuccess'  => '交易成功',
        'TradeClosed'   => '交易关闭',
        'PartSend'      => '部分发货'
    ];

    public static $refundMap = [
        'Normal' => '正常',
        'Refunding' => '退款中', //（客户点击退款）
        'RefundSuccess' => '退款成功', //（同意退款）
        'RefundClosed' => '退款关闭', //（客户取消退款或者拒绝退款
    ];
}
