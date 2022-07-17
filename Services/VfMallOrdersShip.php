<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOrdersShip extends VodafoneMall
{
    public function shipVfMallOrders($token, $orderIds)
    {
        return json_decode(Request::VodafoneRequest("v2/shipVfMallOrders", $orderIds, $this->test, $token, "POST"), true);
    }
}
