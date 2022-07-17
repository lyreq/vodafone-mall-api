<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingMultiUpdate extends VodafoneMall
{
    public function updateVfMallOfferingMulti( $token,$arrayData)
    {
        return json_decode(Request::VodafoneRequest("updateVfMallOfferingMulti", $arrayData, $this->test, $token, "POST"), true);
    }
}
