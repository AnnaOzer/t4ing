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

class Product
    extends Model
{
    static protected $schema = [

        'columns' => [
            'title' => ['type' => 'string'],
            'titleOfficial' => ['type' => 'string'],
            'comment' => ['type' => 'string']
        ],
    ];
}

