<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464967221_createIngrs
    extends Migration
{

    public function up()
    {
        $this->createTable('ingrs', [
            'title' => ['type' => 'string'],
            'round' => ['type' => 'int'],
            'priority' => ['type' => 'int'],
            'comment' => ['type' => 'string'],

        ]);
    }

    public function down()
    {
        $this->dropTable('ingrs');
    }
    
}