<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProducts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint' => 10,
                'unsigned' => true
            ],
            'category_id'=>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'name'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 250,
            ],
            'description'=>[
                'type'=> 'TEXT',
                'null' => true,
            ],
            'price'=>[
            'type'=> 'BIGINT',
            'unsigned'=> true,
            ],
            'sku'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 50,
                'null' => true,
            ],
            'image'=>[
                'type'=> 'text',
                'null' => true,
            ],
            'status'=>[
                'type'=> 'ENUM',
                'constraint'=> ['active','inactive'],
                'default' => 'active',
            ],
            'created_at'=>[
                'type'=> 'DATETIME'
            ]
        ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('category_id','categories','id','CASCADE','CASCADE');
    $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
