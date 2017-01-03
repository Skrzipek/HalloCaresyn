<?php

namespace Caresyn\Migration;

use Caresyn\Models;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreatePonusSettingsTable {

    /**
     * @param Migrate $migrate
     */
    public function run(Migrate $migrate)
    {
        $migrate->createTable(Models\PonusSettings::class, 10, 20);
    }

}