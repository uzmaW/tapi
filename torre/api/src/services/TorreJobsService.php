<?php
namespace Torre\Service;

use Torre\Constants;

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
    public $response;
    public function __construct($request=[])
    {
        $this->request = $request;
    }

    public function getResults() {

        return $this->setCurlParams()->getJsonData();

    }

    public function setCurlParams() {
        /* generate keyword criteria*/
        $keyToSearch = [];
        $qKeyToSearch = [];
        $this->request['q'] = isset($this->request['q'])?:['q'=>''];
        if(!is_array($this->request['q']) )  $this->request['q'] = array($this->request['q']);

        foreach ($this->request['q'] as $keyword) {

            if (!empty($keyword)) {
                $keyToSearch[]=["skill" => ["term" => $keyword, "experience" => 'potential-to-develop']];
                $qKeyToSearch[]= 'skill:'.$keyword;
            }

        }
        $qKeyToSearchText = implode(' and ',$qKeyToSearch);
        $qKeyToSearch = count($qKeyToSearch)>1? "{$qKeyToSearchText}":$qKeyToSearchText;
        if(count($keyToSearch)<=1) {
            $keyToSearch = reset($keyToSearch);
        } else
            $keyToSearch = ['and'=>$keyToSearch];

        $keyToSearch = json_encode($keyToSearch,true);
        $oParams=[
        'q' => $qKeyToSearch,
        'currency' =>  'USD$',
        'page'=> $this->request['page']??0,
        'periodicity'=> $this->request['periodicity']??'hourly',
        'lang'=> $this->request['lang']??'en',
        'size'=> $this->request['size']??20,
        'aggregate'=> $this->request['aggregate']??true,
        'offset'=> $this->request['offset']??0
        ];


        $this->oParams = $oParams;
        $this->urlFields = $this->build_query();
        $this->postFields = $keyToSearch;
        $this->url = Constants::$API_SEARCH_URL;
        $this->method= 'POST';


        return $this;
    }
    public function build_query() {
        $oParams = $this->oParams;
        $var = [];
        foreach( $oParams as $key=>$val) {
            $var[] = "$key=$val";;
        }

        $params =htmlspecialchars(implode('&',$var));

        return $params;

    }
}