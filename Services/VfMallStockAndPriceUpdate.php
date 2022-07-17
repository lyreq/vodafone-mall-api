<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallStockAndPriceUpdate extends VodafoneMall
{
    public function updateVfMallStockAndPrice($token,$arrayData)
    {
        return json_decode(Request::VodafoneRequest("updateVfMallStockAndPrice", $arrayData, $this->test, $token, "POST"), true);
    }
}
