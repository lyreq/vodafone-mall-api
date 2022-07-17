<?php

namespace Vodafone\API;

use Vodafone\Request;
use Vodafone\Services\VfMallToken;
use Vodafone\Services\VfMallBrands;
use Vodafone\Services\VfMallCargoCompanies;

class VodafoneMall
{
    public $username;
    public $password;

    public function __construct($username, $password, $test = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->test = $test;
    }


    public function getVfMallToken()
    {
        $vfToken = new VfMallToken($this->username, $this->password, $this->test);
        return $vfToken->CreateVfMallToken();
    }

    public function VfMallBrands($token)
    {
        $vfBrands = new VfMallBrands($this->username, $this->password, $this->test);
        return $vfBrands->GetVfMallBrands($token);
    }

    public function VfMallCargoCompanies($token)
    {
        $vfCargoCamp = new VfMallCargoCompanies($this->username, $this->password, $this->test);
        return $vfCargoCamp->getVfMallCargoCompanies($token);
    }

    
}
