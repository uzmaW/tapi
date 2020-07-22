<?php
namespace Torre\Controllers;


class Controller {



    public $keyword;

    public $service;
    public $request;
    public $apiAction;
    public $action;


    public function __construct($request,$service)
	{
        $this->request = $request;
        $this->service = $service;
	}




}
