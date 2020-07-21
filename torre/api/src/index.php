<?php
namespace Torre;
use Torre\Controllers\TorreJobDetailController;
use Torre\Controllers\TorreJobsController;
use Torre\Controllers\TorreProfileController;

/**
 * Project Torre
 * Description: Torre web boilerplate.
 * Author: UZMA I
 * Author URI: http://wordpress.org
 * Version: 1.0.0
 */



// Torre version
define( 'TORRE_SEARCH_VERSION', '1.0.0' );


class Widget
{
    public $route;
    private $data;
    public $controller;
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
    }

    /**
     * Initialize Widget
     *
     * @return string Returns the phrase passed in
     */
    public static function run()
    {
        $request = $_REQUEST;

        $request = $request + ['method' => $_SERVER['REQUEST_METHOD']];
        $routes = self::get_route();

        switch ($routes) {
            case '/' :
            case '' :
            case '/jobs' :
                new TorreJobsController($request);
                break;

            case '/job':
                new TorreJobDetailController($request);
                break;

            case '/profile' :
                new TorreProfileController($request);
                break;
        }
    }

    public static function get_route() {
        $base = explode('://'.$_SERVER['HTTP_HOST'],$_SERVER['REQUEST_URI']);

        $routes_base  = explode('?', $base[0]);

        $routes_base  = $routes_base[0];
        $routes_base  = trim($routes_base,'/');
        $routes       = explode("/",($routes_base));
        $routes       = array_filter($routes);

        $routes_count = count($routes);
        $route = '/';
        if($routes_count>1) {
            $route1 = $routes[$routes_count - 2];
            $route2 = $routes[$routes_count - 1];


            if (stripos($routes_base, $route1) === 0 && $routes_count <= 2)
                $route = '/' . $route2;
            elseif ($routes_count >= 3)
                $route = '/' . $route1 . '/' . $route2;
        }
        return $route;
    }
}
