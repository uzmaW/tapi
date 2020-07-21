<?php
namespace Torre\Controllers;

use Torre\apiBridge;
use Torre\View;

class TorreJobDetailController extends Controller {

    /**
     * TorreJobDetailController constructor.
     * @param $request
     */
    public function __construct($request)
    {
        parent::__construct($request,new apiBridge('JobDetail', $request));
    }

    public function show(){
        $data = $this->service->getResults();
        View::render('job_detail',$data);
    }

}