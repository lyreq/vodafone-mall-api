<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallOrderStatusUpdate extends VodafoneMall
{
    public function updateVfMallOrderStatus ($token,$orderId,$newStatus,$reasonCode = "",$reasonDescription = "")
    {
        $arrayData['orderId'] = $orderId;
        $arrayData['newStatus'] = $newStatus;
        if(!empty($reasonCode)){
            $arrayData['reasonCode'] = $reasonCode;
        }
        if(!empty($reasonDescription)){
            $arrayData['reasonDescription'] = $reasonDescription;
        }
        return json_decode(Request::VodafoneRequest("v2/updateVfMallOrderStatus",$arrayData,$this->test,$token,"POST"));
    }
}
