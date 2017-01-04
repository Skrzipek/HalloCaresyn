<?php

namespace Caresyn\Service;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class CaresynRouteServiceProvider extends RouteServiceProvider
{

    /**
     * Explanation: We use the get method to pass two parameters. The first parameter 'hello' defines the route.
     * The second parameter consists of the Fully-Qualified Class Name and the @ Controller method that is called when the route is called.
     * @param Router $router
     */
  public function map( Router $router )
  {
      $router->get('hellocaresyn', 'Caresyn\Controller\CaresynContentController@sayCaresyn');
  }

}
