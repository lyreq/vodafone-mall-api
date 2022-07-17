<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingMulti extends VodafoneMall
{
    public function createVfMallOfferingMulti($token, $arrayData)
    {
        return json_decode(Request::VodafoneRequest("createVfMallOfferingMulti", $arrayData, $this->test, $token, "POST"), true);
    }
}
