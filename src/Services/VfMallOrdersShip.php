<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOrdersShip extends VodafoneMall
{
    
    public function ship_VfMallOrders($token, $orderIds)
    {
        return Request::VodafoneRequest("v2/shipVfMallOrders", $orderIds, $this->test, $token, "POST");
    }
}
