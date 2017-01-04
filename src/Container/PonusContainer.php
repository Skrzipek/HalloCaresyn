<?php
/**
 * Created by PhpStorm.
 * User: oskrzipek
 * Date: 04.01.17
 * Time: 16:33
 */
namespace Caresyn\Container;

class PonusContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Caresyn::ponuscontainer.twig');
    }
}