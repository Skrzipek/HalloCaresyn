<?php

namespace Caresyn\service;

use Plenty\Plugin\Provider;

class CaresynServiceProvider extends ServiceProvider
{

  /**
   * Register Service Provider
   */
   public function  register() {
     $this->getApplication()->register( CaresynRouteServiceProvider::class );
   }

}
