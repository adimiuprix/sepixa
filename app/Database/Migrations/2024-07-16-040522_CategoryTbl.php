<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryTbl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 100,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');
        $initialData = [
            [
                'name'     => 'PHP Script',
                'slug'     => 'php-script',
                'image'     => 'images.png',
            ],
        ];
        $this->db->table('categories')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
