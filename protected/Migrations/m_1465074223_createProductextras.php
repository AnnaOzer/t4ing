<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1465074223_createProductextras
    extends Migration
{

    public function up()
    {
        $this->createTable('productextras', [
            'officialTitle' => ['type' => 'string'],
            '__products_id' => ['type' => 'link'],
        ]);
    }

    public function down()
    {
        $this->dropTable('productextras');
    }
    
}