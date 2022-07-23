<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallCancellationReasons extends VodafoneMall
{
    public function get_VfMallCancellationReasons($token, $orderIds)
    {
        $arrayData['orderIds'] = $orderIds;
        return Request::VodafoneRequest("getVfMallCancellationReasons", $arrayData, $this->test, $token, "GET");
    }
}
