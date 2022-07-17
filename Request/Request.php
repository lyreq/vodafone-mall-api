<?php

namespace Vodafone;

class Request
{
    static function VodafoneRequest($apimethod, $arrayData = "", $test = false, $token = "", $method = "POST")
    {
        $curl = curl_init();
        if ($test) {
            $urlp = "https://efes.vodafone.com.tr/vfmallapi/" . $apimethod;
        } else {
            $urlp = "https://vfmallapi.vodafone.com.tr/vfmallapi/" . $apimethod;
        }


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlp);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); //times out after 10s
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        if (!empty($token)) {
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Content-Type: application/json',
                    'Authorization:basic ' . $token,

                )
            );
        }



        if ($method == "POST") {
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        if ($method == "GET") {
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
        }

        if (!empty($arrayData)) {
            if ($method == "POST") {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayData));
            }
            if ($method == "GET") {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayData);
            }
        }


        $result = curl_exec($ch);
        curl_close($ch);
        return  json_decode($result, true);
    }
}
