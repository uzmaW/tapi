<?php

use Torre\Service\Service;

class TorreJobDetailService extends Service {

    public $oParams = [

        'lang'=>'en',
        'size'=>20,
        'aggregate'=>true,
        'offset'=>0
    ];

    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function getResults() {

        $this->setParams();
        self::_getJsonData();
    }

    public function setParams() {
        /* generate keyword criteria*/
        $keyToSearch = $this->request['id'] ;

        $this->oParams['id'] = $keyToSearch;
        $this->oParams['currency']= $this->request['currency']??'USD$';
        $this->oParams['lang']= $this->request['lang']??'en';
        $this->oParams['size']= $this->request['size']??20;
        $this->oParams['aggregate']= $this->request['aggregate']??true;
        $this->oParams['offset']= $this->request['offset']??0;

        $this->urlFields  = http_build_query($this->oParams);
        $this->postFields = json_encode($keyToSearch,true);
        $this->url = API_SEARCH_URL;
        $this->method = 'GET';

        return $this;
    }
}