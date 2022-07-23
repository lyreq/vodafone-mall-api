<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallBrands extends VodafoneMall
{
    public function get_VfMallBrands($token)
    {
        return Request::VodafoneRequest("getVfMallBrands","",$this->test,$token,"GET");
    }
}
