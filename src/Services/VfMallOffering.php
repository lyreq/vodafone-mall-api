<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOffering extends VodafoneMall
{
    public function create_VfMallOffering($token,$arrayData)
    {
        return Request::VodafoneRequest("createVfMallOffering", $arrayData, $this->test, $token, "POST");
    }
}
