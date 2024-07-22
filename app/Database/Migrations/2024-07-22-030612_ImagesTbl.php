<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ImagesTbl extends Migration
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
            'img_parent' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'image_1' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'image_2' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'image_3' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'image_4' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        // Add foreign key constraint
        $this->forge->addKey('id', true);
        $this->forge->createTable('single_images');
    }

    public function down()
    {
        $this->forge->dropTable('single_images');
    }
}
