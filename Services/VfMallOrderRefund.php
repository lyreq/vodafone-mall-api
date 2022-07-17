<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOrderRefund extends VodafoneMall
{
    public function refundVfMallOrder($token, $orderId, $reasonCode, $reasonDescription)
    {
        $arrayData['orderId'] = $orderId;
        $arrayData['reasonCode'] = $reasonCode;
        $arrayData['reasonDescription'] = $reasonDescription;
        return json_decode(Request::VodafoneRequest("v2/refundVfMallOrder", $arrayData, $this->test, $token, "POST"), true);
    }
}
