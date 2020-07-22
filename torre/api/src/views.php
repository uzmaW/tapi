<?php
namespace Torre;

use Torre\Factory\ViewFactory;

class Views {

    public static function render($view,$data) {

       $factory = new ViewFactory($view,$data);
       $factory->load();
    }

}