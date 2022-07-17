<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallCargoCompanies extends VodafoneMall
{

    public function getVfMallCargoCompanies($token)
    {
        return Request::VodafoneRequest("getVfMallCargoCompanies","",$this->test,$token,"GET");
    }
}