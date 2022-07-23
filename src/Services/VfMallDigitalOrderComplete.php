<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallDigitalOrderComplete extends VodafoneMall
{
    public function complete_DigitalOrder($token, $id, $digitalCode = "")
    {
        $arrayData['id'] = $id;
        if (!empty($digitalCode)) {
            $arrayData['digitalCode'] = $digitalCode;
        }
        return Request::VodafoneRequest("completeDigitalOrder", $arrayData, $this->test, $token, "POST");
    }
}
