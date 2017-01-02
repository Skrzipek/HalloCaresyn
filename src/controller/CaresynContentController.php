<?php

namespace Caresyn\controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class CaresynContentController extends Controller
{

  public function sayCaresyn( Twig $twig )
  {
    return $twig->render('HelloCaresyn::hello.twig');
  }

}
