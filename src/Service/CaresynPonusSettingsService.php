<?php

namespace Caresyn\Service;

use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;

class CaresynPonusSettingsService
{

    /**
     * Database
     */
    private $dataBase;

    public function __construct(DataBase $dataBase)
    {
        $this->dataBase = $dataBase;
    }


}