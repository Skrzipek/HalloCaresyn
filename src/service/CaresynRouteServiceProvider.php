<?php

namespace Caresyn\service;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class CaresynRouteServiceProvider extends RouteServiceProvider
{

  /**
   * Explanation: We use the get method to pass two parameters. The first parameter 'hello' defines the route.
   * The second parameter consists of the Fully-Qualified Class Name and the @ controller method that is called when the route is called. 
   */
  public function map( Router $router ) {
    $router->get('hello', 'HelloCaresyn\content\CaresynContentController@sayCaresyn');
  }

}
