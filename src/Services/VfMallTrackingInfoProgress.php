<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallTrackingInfoProgress extends VodafoneMall
{
    public function progress_TrackingInfo($token, $refNo, $trackingNo, $trackingLink = "", $status, $statusDate = "")
    {
        $arrayData['refNo'] = $refNo;
        $arrayData['trackingNo'] = $trackingNo;

        if (!empty($trackingLink)) {
            $arrayData['trackingLink'] = $trackingLink;
        }
        switch ($status) {
            case '1':
                $status = "SHIPPED";
                break;
            case '2':
                $status = "DELIVERED";
                break;
            case '3':
                $status = "RETURNED";
                break;

            default:
                $status = "SHIPPED";
                break;
        }
        $arrayData['status'] = $status;
        if (!empty($statusDate)) {
            $arrayData['statusDate'] = date("Y-m-d h:m:s", strtotime($statusDate));
        }

        return Request::VodafoneRequest("progressTrackingInfo", $arrayData, $this->test, $token, "POST");
    }
}
