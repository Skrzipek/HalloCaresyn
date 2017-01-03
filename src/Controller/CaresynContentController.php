<?php

namespace Caresyn\Controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class CaresynContentController extends Controller
{

  public function sayCaresyn( Twig $twig ):string
  {
    return $twig->render('HelloCaresyn::hello.twig');
  }

}
