<?php
namespace Torre\Controllers;


use Torre\apiBridge;
use Torre\View;

/**
 * Class TorreProfileController
 * @package Torre\Controllers
 */
class TorreProfileController extends Controller {

    /**
     * TorreProfileController constructor.
     */
    public function __construct($request)
    {
        parent::__construct($request,new apiBridge('Profile', $request));
    }

    public function show(){
        $data = $this->service->getResults();
        View::render('profile',$data);
    }

}