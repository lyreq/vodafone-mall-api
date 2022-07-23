<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallCargoCompanies extends VodafoneMall
{

    public function get_VfMallCargoCompanies($token)
    {
        return Request::VodafoneRequest("getVfMallCargoCompanies","",$this->test,$token,"GET");
    }
}