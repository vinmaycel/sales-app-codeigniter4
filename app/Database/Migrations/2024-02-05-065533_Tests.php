<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tests extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
            ],
            'name' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 50
            ],
            'jabatan' =>[
                'type' => 'ENUM',
                'constraint' => ['staff', 'direktur'],
                'default' => 'staff',
            ],
            'created_at' =>[
                'type' => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tests');
    }

    public function down()
    {
        $this->forge->dropTable('tests');
    }
}
