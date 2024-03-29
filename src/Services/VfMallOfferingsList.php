<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOfferingsList extends VodafoneMall
{
    public function list_VfMallOfferings($token, $status = "", $date = "", $page = "", $size = "", $barcodeList = "")
    {

        if (!empty($status)) {
            switch ($status) {
                case 1:
                    $status = "Active";
                    break;

                default:
                    $status = "Inactive";
                    break;
            }
            $arrayData['status'] = $status;
        }

        if (!empty($date)) {
            $date = date("Y-m-d h:m:s", strtotime($date));
            $arrayData['date'] = $date;
        }
        if (!empty($page)) {
            $arrayData['page'] = $page;
        }

        if (!empty($size)) {
            $arrayData['size'] = $size;
        }


        if (!empty($barcodeList)) {
            $arrayData['barcodeList'] = $barcodeList;
        }
        return Request::VodafoneRequest("v2/listVfMallOfferings",$arrayData, $this->test, $token, "GET");
    }
}
