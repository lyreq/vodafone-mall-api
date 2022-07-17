<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallCargoCompany extends VodafoneMall
{
    public function updateVfMallCargoCompany($token,$data)
    {
        $arrayData["offerings"] = $data;
        return json_decode(Request::VodafoneRequest("updateVfMallCargoCompany", $arrayData, $this->test, $token, "POST"), true);
    }
}
