<?php

namespace Caresyn\controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Template\Twig;

class CaresynContentController extends Controller
{

  public function sayCaresyn( Twig $twig ):string
  {
    return $twig->render('HelloCaresyn::hello.twig');
  }

}
