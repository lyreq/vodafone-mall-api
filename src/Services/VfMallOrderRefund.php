<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOrderRefund extends VodafoneMall
{
    public function refund_VfMallOrder($token, $orderId, $reasonCode, $reasonDescription)
    {
        $arrayData['orderId'] = $orderId;
        $arrayData['reasonCode'] = $reasonCode;
        $arrayData['reasonDescription'] = $reasonDescription;
        return Request::VodafoneRequest("v2/refundVfMallOrder", $arrayData, $this->test, $token, "POST");
    }
}
