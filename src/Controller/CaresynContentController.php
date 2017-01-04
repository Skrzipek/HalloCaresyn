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

      $templateData = array(
          'resultCount' => $resultItems->count(),
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
