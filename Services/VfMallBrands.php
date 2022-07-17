<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallBrands extends VodafoneMall
{
    public function GetVfMallBrands($token)
    {
        return json_decode(Request::VodafoneRequest("getVfMallBrands","",$this->test,$token,"GET"),true);
    }
}
