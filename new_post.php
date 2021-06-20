<?php

namespace NewPostDelivery;

/**
 * Нова пошта.
 *
 * @author  SergeyHumeniuk 
 *
 * @see https://github.com/SergeyHumeniuk
 */
class NewPostApi
{
    //api from new post
    //url for new post
    const URL_NP = 'https://api.novaposhta.ua/v2.0/json/?';

    public function getDel($key)
    {

        $params =  $this->Param($key);
        $ch = curl_init(self::URL_NP . $params);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }
    public function Param($key)
    {
        $param = [
            "apiKey" => $key,
            "modelName" => "Counterparty",
            "calledMethod" => "getCounterparties",
            "methodProperties" => [
                "CounterpartyProperty" => "Recipient",
                "Page" => "1"
            ]
        ];
        return json_encode($param);
    }
}
