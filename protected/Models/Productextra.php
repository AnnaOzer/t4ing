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

class Productextra
    extends Model
{
    static protected $schema = [

        'columns' => [
            'titleOf' => ['type' => 'string'],
            '__product_id' => ['type' => 'link'],
        ],

        'relations' => [
            'product' => ['type' => self::BELONGS_TO, 'model' => Product::class],
        ]
    ];
} 