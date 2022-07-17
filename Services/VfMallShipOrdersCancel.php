<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallShipOrdersCancel extends VodafoneMall
{
    public function cancelShipVfMallOrders($token, $orderID)
    {
        $arrayData['orderID'] = $orderID;
        return json_decode(Request::VodafoneRequest("cancelShipVfMallOrders", $arrayData, $this->test, $token, "POST"), true);
    }
}
