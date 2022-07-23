<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallOrdersGet extends VodafoneMall
{
    public function get_VfMallOrders($token, $shipmentStatus = "", $status = "", $shoppingCartId = "", $createdDateStart = "", $createdDateEnd = "", $updatedDateStart = "", $updatedDateEnd = "", $page = 0, $size = 1)
    {
        if (!empty($shipmentStatus)) {
            switch ($shipmentStatus) {
                case 'UNPACKED':
                    $shipmentStatus = "UNPACKED";
                    break;

                default:
                    $shipmentStatus = "PACKED";
                    break;
            }
            $arrayData['shipmentStatus'] = $shipmentStatus;
        }


        if (!empty($status)) {

            switch ($status) {
                case '1':
                    $status = "PENDING";
                    break;
                case '2':
                    $status = "PREPARING";
                    break;
                case '3':
                    $status = "DELIVERED_TO_CUSTOMER";
                    break;
                case '4':
                    $status = "NOT_DELIVERED_TO_CUSTOMER";
                    break;
                case '5':
                    $status = "RETURN_REQUESTED";
                    break;
                case '6':
                    $status = "SHIPPED_TO_DEALER";
                    break;
                case '7':
                    $status = "DELIVERED_TO_DEALER";
                    break;
                case '8':
                    $status = "NOT_DELIVERED_TO_DEALER";
                    break;
                case '9':
                    $status = "RETURN_ACCEPTED";
                    break;
                case '10':
                    $status = "RETURN_PENDING";
                    break;
                case '11':
                    $status = "RETURN_DENIED";
                    break;
                case '12':
                    $status = "REFUNDED";
                    break;
                case '13':
                    $status = "CANCELLED";
                    break;
                case '14':
                    $status = "COMPLETED";
                    break;

                default:
                    $status = "COMPLETED";

                    break;
            }
            $arrayData['status'] = $status;
        }

        if(!empty($shoppingCartId)){
            $arrayData['shoppingCartId'] = $shoppingCartId;
        }
   

        if (!empty($createdDateStart)) {
            $arrayData['createdDateStart'] = date("Y-m-d h:m:s", strtotime($createdDateStart));
        }

        if (!empty($createdDateEnd)) {
            $arrayData['createdDateEnd'] = date("Y-m-d h:m:s", strtotime($createdDateEnd));
        }

        if (!empty($updatedDateStart)) {
            $arrayData['updatedDateStart'] = date("Y-m-d h:m:s", strtotime($updatedDateStart));
        }
        if (!empty($updatedDateEnd)) {
            $arrayData['updatedDateEnd'] = date("Y-m-d h:m:s", strtotime($updatedDateEnd));
        }

        $arrayData['page'] = $page;
        $arrayData['size'] = $size;


        return Request::VodafoneRequest("getVfMallOrders", $arrayData, $this->test, $token, "GET");
    }
}
