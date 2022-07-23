<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingMulti extends VodafoneMall
{
    public function create_VfMallOfferingMulti($token, $arrayData)
    {
        return Request::VodafoneRequest("createVfMallOfferingMulti", $arrayData, $this->test, $token, "POST");
    }
}
