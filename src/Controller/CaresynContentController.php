<?php

namespace Caresyn\Controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

use Caresyn\Models\PonusSettings;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;

class CaresynContentController extends Controller
{

  public function sayCaresyn( Twig $twig, ItemDataLayerRepositoryContract $itemRepository ):string
  {
      $items = [];
      $itemRepository->search($items, ['de']);

      $templateData = array(
          'resultCount' => $items->count(),
          'currentItems' => $items
      );

      /*
      $settings     = pluginApp(PonusSettings::class);

      $settingsRead = pluginApp(PonusSettings::class);

      $dataBase = pluginApp(DataBase::class);

      if($settings instanceof PonusSettings)
      {

          $settings->name      = "Luftgewehr";
          $settings->value     = "Glatte 12";
          $settings->createdAt = date('Y-m-d H:i:s');
          $settings->updatedAt = date('Y-m-d H:i:s');

          $settings = $dataBase->save($settings);
      }

      $settingsRead = $dataBase->find( $settings );
        */
      return $twig->render('Caresyn::hello.twig', $templateData);
  }

}
