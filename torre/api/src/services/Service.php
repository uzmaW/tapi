<?php

namespace Torre\Service;



Class Service
{

    public $url;
    public $postFields = '';
    public $urlFields = '';
    public $method = 'GET';
    public $instance ;
    public static function getInstance() {
        return new self();
    }
    public static function _getJsonData()
    {

        $configArray =  array( 'Content-Type: text/json');
        $method = self::getInstance()->method;
        $postFields = self::getInstance()->postFields;
        $urlFields = self::getInstance()->urlFields;
        $url = self::getInstance()->url;
        $url = $url.'?'.$urlFields;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16");

        switch ($method) {
            case "POST":
                curl_setopt($ch, CURLOPT_POST, 1);
                if (!empty($postFields)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                }
                break;

            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                if (!empty($postFields)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                }
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                if (!empty($postFields)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                }
                break;
            default:
                if ($postFields)
                    $url = sprintf("%s?%s", $url, http_build_query($postFields));
        }

        //OPTIONS:
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $configArray);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);


        $output = substr($result, $header['header_size']);
        return $output;
    }
}
