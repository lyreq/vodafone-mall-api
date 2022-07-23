<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallCargoCompany extends VodafoneMall
{
    public function update_VfMallCargoCompany($token,$data)
    {
        $arrayData["offerings"] = $data;
        return Request::VodafoneRequest("updateVfMallCargoCompany", $arrayData, $this->test, $token, "POST");
    }
}
