<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\API\VodafoneMall;

class VfMallBatchOperationCheck extends VodafoneMall
{
    public function checkVfMallBatchOperation($token,$batchRequestId, $methodName)
    {
        switch ($methodName) {
            case '1':
                $method = "updateStockAndPrice";
                break;

            case '2':
                $method = "createOfferingMulti";
                break;

            case '3':
                $method = "updateOfferingMulti";
                break;

            default:
                $method = "updateStockAndPrice";
                break;
                break;
        }
        $arrayData["batchRequestId"] = $batchRequestId;
        $arrayData["methodName"] = $method;
        return json_decode(Request::VodafoneRequest("checkVfMallBatchOperation", $arrayData, $this->test, $token, "GET"), true);
    }
}
