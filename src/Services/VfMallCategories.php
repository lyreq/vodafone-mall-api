<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallCategories extends VodafoneMall
{
    public function get_VfMallCategories($token, $page = 0, $size = 2)
    {
        $arrayData['page'] = $page;
        $arrayData['size'] = $size;
        return Request::VodafoneRequest("getVfMallCategories", $arrayData, $this->test, $token, "GET");
    }
}
