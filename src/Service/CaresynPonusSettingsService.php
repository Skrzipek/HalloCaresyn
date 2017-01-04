<?php

namespace Caresyn\Service;

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