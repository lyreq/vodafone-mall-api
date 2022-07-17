<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingUpdate extends VodafoneMall
{
    public function updateVfMallOffering($token, $status, $arrayData)
    {
        if ($status == 1) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }

        return json_decode(Request::VodafoneRequest("updateVfMallOffering?status={$status}", $arrayData, $this->test, $token, "POST"), true);
    }
}
