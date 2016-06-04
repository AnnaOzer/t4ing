<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Output
 * @package App\Models
 *
 * @property string $title
 * @property string $titleOfficial
 * @property string $comment

 */

class Ingr
    extends Model
{
    static protected $schema = [

        'columns' => [
            'title' => ['type' => 'string'],
            'round' => ['type' => 'int'],
            'priority' => ['type' => 'int'],
            'comment' => ['type' => 'string'],
        ],

        'relations' => [
            'ingrextras' => ['type' => self::HAS_MANY, 'model' => Ingrextra::class],
        ]
    ];
}

