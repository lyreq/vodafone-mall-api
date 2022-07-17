<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOffering extends VodafoneMall
{
    public function createVfMallOffering($token,$arrayData)
    {
        return json_decode(Request::VodafoneRequest("createVfMallOffering", $arrayData, $this->test, $token, "POST"), true);
    }
}
