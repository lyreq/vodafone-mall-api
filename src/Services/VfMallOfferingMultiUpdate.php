<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingMultiUpdate extends VodafoneMall
{
    public function update_VfMallOfferingMulti( $token,$arrayData)
    {
        return Request::VodafoneRequest("updateVfMallOfferingMulti", $arrayData, $this->test, $token, "POST");
    }
}
