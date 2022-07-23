<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingUpdate extends VodafoneMall
{
    public function update_VfMallOffering($token, $status, $arrayData)
    {
        if ($status == 1) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }

        return Request::VodafoneRequest("updateVfMallOffering?status={$status}", $arrayData, $this->test, $token, "POST");
    }
}
