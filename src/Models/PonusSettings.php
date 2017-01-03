<?php

namespace Caresyn\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

class PonusSettings extends Model {

    public $id          = 0;
    public $name        = '';
    public $value       = '';
    public $createdAt   = '';
    public $updatedAt   = '';

    public function getTableName(): string
    {
        return 'Caresyn::ponusSettings';
    }
}