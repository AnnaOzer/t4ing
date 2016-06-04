<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Productextra
 * @package App\Models
 *
 * @property string $officialTitle
 * @property \App\Models\Product $product

 */

class Ingrextra
    extends Model
{
    static protected $schema = [

        'columns' => [
            'officialTitle' => ['type' => 'string'],
            '__ingr_id' => ['type' => 'link'],
        ],

        'relations' => [
            'ingr' => ['type' => self::BELONGS_TO, 'model' => Ingr::class],
        ]
    ];
} 