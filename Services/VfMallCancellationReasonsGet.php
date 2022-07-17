<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallCancellationReasons extends VodafoneMall
{
    public function getVfMallCancellationReasons($token, $orderIds)
    {
        $arrayData['orderIds'] = $orderIds;
        return json_decode(Request::VodafoneRequest("getVfMallCancellationReasons", $arrayData, $this->test, $token, "GET"), true);
    }
}
