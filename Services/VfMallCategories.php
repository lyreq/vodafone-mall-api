<?php

namespace Vodafone\Services;

use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallCategories extends VodafoneMall
{
    public function getVfMallCategories($token, $page = 0, $size = 2)
    {
        $arrayData['page'] = $page;
        $arrayData['size'] = $size;
        return json_decode(Request::VodafoneRequest("getVfMallCategories", $arrayData, $this->test, $token, "GET"), true);
    }
}
