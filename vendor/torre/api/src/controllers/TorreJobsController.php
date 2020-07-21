<?php
namespace Torre\Controllers;


use Torre\apiBridge;

use Torre\Views;
use Torre\Service;
use Torre\Service\TorreJobsService as TorreJobsService;

class TorreJobsController extends Controller {

    /**
     * TorreJobsController constructor.
     * @param $request
     */
    public function __construct($request)
    {

        parent::__construct($request,new apiBridge('Jobs' , $request));

    }

    public function show(){
        $data = $this->service->getResults();
        Views::render('jobs',$data);
    }
}