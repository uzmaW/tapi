<?php
namespace Torre\Api;

class apiBridge
{   public $service;
    public $request;
    public $action;

    public function __construct($action,$request)
    {
        $this->setAction($action)->setRequest($request)->getService();
    }

    public function getService()
    {
        $service = "Torre{$this->action}Service";
        $this->service = new $service($this->request);
        return $this;
    }

    public function getResults() {
        return $this->service->getResults();
    }

    public function setRequest($request){ $this->request = $request; return $this;}
    public function setAction($action){ $this->action = $action; return $this;}

}