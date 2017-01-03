<?php

namespace Caresyn\Service;

use Plenty\Plugin\ServiceProvider;

class CaresynServiceProvider extends ServiceProvider
{

  /**
   * Register Service Provider
   */
   public function register() {
     $this->getApplication()->register( CaresynRouteServiceProvider::class );
   }

}
