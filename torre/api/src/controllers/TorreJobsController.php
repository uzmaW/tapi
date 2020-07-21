<?php
namespace Torre\Controllers;


use Torre\Api\apiBridge;
use Torre\Views\View;

class TorreJobsController extends Controller {

    public function __construct($request)
    {
        $this->request = $request;
        $this->service =  new apiBridge('Jobs', $request);
    }

    public function show(){
        $data = $this->service->getResults();
        View::render($data);
    }
}