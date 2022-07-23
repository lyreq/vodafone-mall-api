<?php

namespace Vodafone\Services;

use LDAP\Result;
use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallCategoryAttributes extends VodafoneMall
{
    public function get_VfMallCategoryAttributes($token,$id)
    {
        $arrayData['id'] = $id;
        return Request::VodafoneRequest("getVfMallCategoryAttributes", $arrayData, $this->test, $token, "GET");
    }
}
