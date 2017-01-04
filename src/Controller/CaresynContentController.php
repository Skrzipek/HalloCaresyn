<?php

namespace Caresyn\Controller;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

use Caresyn\Models\PonusSettings;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;

class CaresynContentController extends Controller
{

  public function sayCaresyn( Twig $twig, ItemDataLayerRepositoryContract $itemRepository ):string
  {
      $itemColumns = [
          'itemDescription' => [
              'name1',
              'description'
          ],
          'variationBase' => [
              'id'
          ],
          'variationRetailPrice' => [
              'price'
          ],
          'variationImageList' => [
              'path',
              'cleanImageName'
          ]
      ];

      $itemFilter = [

      ];

      $itemParams = [
          'language' => 'de'
      ];

      $items = array();

      $resultItems = $itemRepository->search($itemColumns, $itemFilter, $itemParams);

      foreach ($resultItems as $item)
      {
          $items[] = $item;
      }

      // $settings     = pluginApp(PonusSettings::class);
      // $settingsRead1 = pluginApp(PonusSettings::class);
      // $settingsRead2 = pluginApp(PonusSettings::class);

      $dataBase = pluginApp(DataBase::class);

      /*
      if($settings instanceof PonusSettings)
      {

          $settings->id        = 2;
          $settings->name      = "Pistole";
          $settings->value     = "Glatte 1";
          $settings->createdAt = date('Y-m-d H:i:s');
          $settings->updatedAt = date('Y-m-d H:i:s');

          $settings = $dataBase->save($settings);
      }
      */

      $settingsRead1 = $dataBase->find(PonusSettings::class, 1);
      $settingsRead2 = $dataBase->find(PonusSettings::class, 2);

      $templateData = array(
          'resultCount' => $resultItems->count(),
          'currentItems' => $items,
          'settings1' => $settingsRead1,
          'settings2' => $settingsRead2
      );

      return $twig->render('Caresyn::hello.twig', $templateData);
  }

}
