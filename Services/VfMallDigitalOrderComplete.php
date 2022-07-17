<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class DigitalOrderComplete extends VodafoneMall
{
    public function completeDigitalOrder($token, $id, $digitalCode = "")
    {
        $arrayData['id'] = $id;
        if (!empty($digitalCode)) {
            $arrayData['digitalCode'] = $digitalCode;
        }
        return json_decode(Request::VodafoneRequest("completeDigitalOrder", $arrayData, $this->test, $token, "POST"), true);
    }
}
