<?php
use Torre\Service\Service;

class TorreJobsService extends Service {
    public $oParams = [
        'q'=>'skill',
        'currency'=>'USD$',
        'page'=>0,
        'periodicity'=>'hourly',
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
        $keyToSearch = [];
        foreach($this->request['q'] as $keyword) {
            if(!empty($keyword)) {
                $keyToSearch[]=["skill"=>["term"=>$keyword,"experience"=>'potential-to-develop']];
            }
        }
        if(count($keyToSearch)>1) {
            $keyToSearch = ['and'=>$keyToSearch];
        }
        $this->oParams['q'] = $keyToSearch;
        $this->oParams['currency']= $this->request['currency']??'USD$';
        $this->oParams['page']= $this->request['page']??0;
        $this->oParams['periodicity']= $this->request['periodicity']??'hourly';
        $this->oParams['lang']= $this->request['lang']??'en';
        $this->oParams['size']= $this->request['size']??20;
        $this->oParams['aggregate']= $this->request['aggregate']??true;
        $this->oParams['offset']= $this->request['offset']??0;

        $this->urlFields  = http_build_query($this->oParams);
        $this->postFields = json_encode($keyToSearch,true);
        $this->url = API_SEARCH_URL;
        $this->method = 'POST';

        return $this;
    }
}