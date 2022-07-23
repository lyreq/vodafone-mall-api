<?php

namespace Vodafone\Services;

use Vodafone\Request\Request;
use Vodafone\VodafoneMall;

class VfMallTokenCreate extends VodafoneMall
{
    public function createVfMallToken()
    {
        $arrayData["username"] = $this->username;
        $arrayData["password"] = $this->password;
        $token =  Request::VodafoneRequest("createVfMallToken", $arrayData, $this->test, "", "POST");
        if (trim($token['result']['result']) == "SUCCESS") {
            return $token['token'];
        } else {
            return $token;
        }
    }
}
