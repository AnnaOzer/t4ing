<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464967957_createProducts
    extends Migration
{

    public function up()
    {
        $this->createTable('products', [
            'title' => ['type' => 'string'],
            'titleOfficial' => ['type' => 'string'],
            'comment' => ['type' => 'string']
        ]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
    
}