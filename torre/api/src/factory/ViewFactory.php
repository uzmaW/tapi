<?php
namespace Torre\Factory;

/**
 * @property string viewFile
 */
class ViewFactory {

    protected $view='default';
    protected $viewFile = '';
    protected $data;

    public function __construct($viewFile='',$data)
    {
        $this->setData($data)->setView($viewFile);
    }

    public function load() {



        extract($this->data);
        include $this->viewFile;
    }

    protected function setView($viewFile) {
        if(empty($viewFile)) $viewFile = $this->view;
        $this->viewFile = __DIR__.'/../views/'.$viewFile.'.php';
        return $this;
    }
    protected function setData($data) {
        $this->data = $data;
        return $this;
    }

}