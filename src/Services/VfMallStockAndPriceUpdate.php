<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallStockAndPriceUpdate extends VodafoneMall
{
    public function update_VfMallStockAndPrice($token,$arrayData)
    {
        return Request::VodafoneRequest("updateVfMallStockAndPrice", $arrayData, $this->test, $token, "POST");
    }
}
