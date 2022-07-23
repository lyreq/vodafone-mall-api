<?php
//Vodafone Mall API v10.5 by Yasin Timur
//contact : infoyasintimur@gmail.com
//date : 07/2022

namespace Vodafone;

use Vodafone\Services\VfMallBatchOperationCheck;
use Vodafone\Services\VfMallTokenCreate;
use Vodafone\Services\VfMallBrands;
use Vodafone\Services\VfMallCancellationReasons;
use Vodafone\Services\VfMallCargoCompanies;
use Vodafone\Services\VfMallCargoCompany;
use Vodafone\Services\VfMallCategories;
use Vodafone\Services\VfMallCategoryAttributes;
use Vodafone\Services\VfMallDigitalOrderComplete;
use Vodafone\Services\VfMallOffering;
use Vodafone\Services\VfMallOfferingMulti;
use Vodafone\Services\VfMallOfferingMultiUpdate;
use Vodafone\Services\VfMallOfferingsList;
use Vodafone\Services\VfMallOfferingUpdate;
use Vodafone\Services\VfMallOrderRefund;
use Vodafone\Services\VfMallOrdersGet;
use Vodafone\Services\VfMallOrdersShip;
use Vodafone\Services\VfMallOrderStatusUpdate;
use Vodafone\Services\VfMallShipOrdersCancel;
use Vodafone\Services\VfMallStockAndPriceUpdate;
use Vodafone\Services\VfMallTrackingInfoProgress;

class VodafoneMall
{
    public $username;
    public $password;
    public $test;

    public function __construct($username, $password, $test = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->test = $test;
    }


    public function getVfMallToken()
    {
        $vf =  new VfMallTokenCreate($this->username, $this->password, $this->test);
        return $vf->createVfMallToken();
    }

    public function getVfMallBrands()
    {
        $vfBrands = new VfMallBrands($this->username, $this->password, $this->test);
        return $vfBrands->get_VfMallBrands(VodafoneMall::getVfMallToken());
    }

    public function getVfMallCargoCompanies()
    {
        $vfCargoCamp = new VfMallCargoCompanies($this->username, $this->password, $this->test);
        return $vfCargoCamp->get_VfMallCargoCompanies(VodafoneMall::getVfMallToken());
    }


    public function getVfMallCategories($page, $size)
    {
        $VfMallCat = new VfMallCategories($this->username, $this->password, $this->test);
        return $VfMallCat->get_VfMallCategories(VodafoneMall::getVfMallToken(), $page, $size);
    }

    public function getVfMallCategoryAttributes($id)
    {
        $VfMallCategoryAttributes = new VfMallCategoryAttributes($this->username, $this->password, $this->test);
        return $VfMallCategoryAttributes->get_VfMallCategoryAttributes(VodafoneMall::getVfMallToken(), $id);
    }

    public function createVfMallOffering($data)
    {
        $createVfMallOffering = new VfMallOffering($this->username, $this->password, $this->test);
        return $createVfMallOffering->create_VfMallOffering(VodafoneMall::getVfMallToken(), $data);
    }

    public function createVfMallOfferingMulti($data)
    {
        $createVfMallOfferingMulti = new VfMallOfferingMulti($this->username, $this->password, $this->test);
        return $createVfMallOfferingMulti->create_VfMallOfferingMulti(VodafoneMall::getVfMallToken(), $data);
    }


    public function updateVfMallOffering($status, $data)
    {
        $updateVfMallOffering = new VfMallOfferingUpdate($this->username, $this->password, $this->test);
        return $updateVfMallOffering->update_VfMallOffering(VodafoneMall::getVfMallToken(), $status, $data);
    }

    public function updateVfMallOfferingMulti($data)
    {
        $updateVfMallOfferingMulti = new VfMallOfferingMultiUpdate($this->username, $this->password, $this->test);
        return $updateVfMallOfferingMulti->update_VfMallOfferingMulti(VodafoneMall::getVfMallToken(), $data);
    }

    public function updateVfMallStockAndPrice($data)
    {
        $updateVfMallStockAndPrice = new VfMallStockAndPriceUpdate($this->username, $this->password, $this->test);
        return $updateVfMallStockAndPrice->update_VfMallStockAndPrice(VodafoneMall::getVfMallToken(), $data);
    }

    public function checkVfMallBatchOperation($bathRequestid, $methodName)
    {
        $checkVfMallBatchOperation = new VfMallBatchOperationCheck($this->username, $this->password, $this->test);
        return  $checkVfMallBatchOperation->check_VfMallBatchOperation(VodafoneMall::getVfMallToken(), $bathRequestid, $methodName);
    }


    public function listVfMallOfferings($status = "", $date = "", $page = "", $size = "", $barcodeList = "")
    {
        $listVfMallOfferings = new VfMallOfferingsList($this->username, $this->password, $this->test);
        return  $listVfMallOfferings->list_VfMallOfferings(VodafoneMall::getVfMallToken(), $status, $date, $page, $size, $barcodeList);
    }

    public function getVfMallOrders($shipmentStatus = "", $status = "", $shoppingCartId = "", $createdDateStart = "", $createdDateEnd = "", $updatedDateStart = "", $updatedDateEnd = "", $page = 0, $size = 1)
    {
        $getVfMallOrders = new VfMallOrdersGet($this->username, $this->password, $this->test);
        return  $getVfMallOrders->get_VfMallOrders(VodafoneMall::getVfMallToken(), $shipmentStatus, $status, $shoppingCartId, $createdDateStart, $createdDateEnd, $updatedDateStart, $updatedDateEnd, $page, $size);
    }

    public function shipVfMallOrders($orderID)
    {
        $shipVfMallOrders = new VfMallOrdersShip($this->username, $this->password, $this->test);
        return $shipVfMallOrders->ship_VfMallOrders(VodafoneMall::getVfMallToken(), $orderID);
    }


    public function getVfMallCancellationReasons($orderID)
    {
        $getVfMallCancellationReasons = new VfMallCancellationReasons($this->username, $this->password, $this->test);
        return $getVfMallCancellationReasons->get_VfMallCancellationReasons(VodafoneMall::getVfMallToken(), $orderID);
    }


    public function updateVfMallOrderStatus($orderID, $newstatus, $reasonCode, $reasonDescription)
    {
        $updateVfMallOrderStatus  = new VfMallOrderStatusUpdate($this->username, $this->password, $this->test);
        return $updateVfMallOrderStatus->update_VfMallOrderStatus(VodafoneMall::getVfMallToken(), $orderID, $newstatus, $reasonCode, $reasonDescription);
    }

    public function refundVfMallOrder($orderID, $reasonCode, $reasonDescription)
    {
        $refundVfMallOrder = new VfMallOrderRefund($this->username, $this->password, $this->test);
        return $refundVfMallOrder->refund_VfMallOrder(VodafoneMall::getVfMallToken(), $orderID, $reasonCode, $reasonDescription);
    }

    public function completeDigitalOrder($orderID, $digitalCode = "")
    {
        $completeDigitalOrder = new VfMallDigitalOrderComplete($this->username, $this->password, $this->test);
        return $completeDigitalOrder->complete_DigitalOrder(VodafoneMall::getVfMallToken(), $orderID, $digitalCode);
    }

    public function updateVfMallCargoCompany($data)
    {
        $updateVfMallCargoCompany  = new VfMallCargoCompany($this->username, $this->password, $this->test);
        return $updateVfMallCargoCompany->update_VfMallCargoCompany(VodafoneMall::getVfMallToken(), $data);
    }

    public function cancelShipVfMallOrders($orderID)
    {
        $cancelShipVfMallOrders = new VfMallShipOrdersCancel($this->username, $this->password, $this->test);
        return $cancelShipVfMallOrders->cancel_ShipVfMallOrders(VodafoneMall::getVfMallToken(), $orderID);
    }

    public function progressTrackingInfo($refNo, $trackingNo, $trackingLink, $status, $statusDate)
    {
        $progressTrackingInfo = new VfMallTrackingInfoProgress($this->username, $this->password, $this->test);
        return $progressTrackingInfo->progress_TrackingInfo(VodafoneMall::getVfMallToken(), $refNo, $trackingNo, $trackingLink, $status, $statusDate);
    }
}
