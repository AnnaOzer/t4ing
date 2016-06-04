<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1465069252_createIngrextras
    extends Migration
{

    public function up()
    {
        $this->createTable('ingrextras', [
            'officialTitle' => ['type' => 'string'],
            '__ingr_id' => ['type' => 'link'],
        ]);
    }

    public function down()
    {
        $this->dropTable('ingrextras');
    }
    
}