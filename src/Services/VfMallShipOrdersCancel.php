<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallShipOrdersCancel extends VodafoneMall
{
    public function cancel_ShipVfMallOrders($token, $orderID)
    {
        $arrayData['orderID'] = $orderID;
        return Request::VodafoneRequest("cancelShipVfMallOrders", $arrayData, $this->test, $token, "POST");
    }
}
