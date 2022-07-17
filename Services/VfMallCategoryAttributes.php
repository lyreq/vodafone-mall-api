<?php

namespace Vodafone\Services;

use LDAP\Result;
use Vodafone\Request;
use Vodafone\VodafoneMall;

class VfMallCategoryAttributes extends VodafoneMall
{
    public function getVfMallCategoryAttributes($token,$id)
    {
        $arrayData['id'] = $id;
        return json_decode(Request::VodafoneRequest("getVfMallCategoryAttributes", $arrayData, $this->test, $token, "GET"), true);
    }
}
