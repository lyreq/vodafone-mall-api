<?php

namespace Vodafone\Services;

use Vodafone\Request;
use  Vodafone\API\VodafoneMall as MainClass;

class VfMallToken extends MainClass
{
    public function CreateVfMallToken()
    {
        $arrayData["username"] = $this->username;
        $arrayData["password"] = $this->password;
        $arrayData["integratorCode"] = NULL;
        $token =  json_decode(Request::VodafoneRequest("createVfMallToken", $arrayData, $this->test), true);
        if (trim($token['result']['result']) == "SUCCESS") {
            return $token['token'];
        } else {
            return $token;
        }
    }
}
