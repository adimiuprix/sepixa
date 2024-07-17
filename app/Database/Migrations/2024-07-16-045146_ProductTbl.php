<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductTbl extends Migration
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
            'id_category' => [
                'type'       => 'INT',
                'constraint' => 100,
                'unsigned'   => true,
                'null'       => true,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'code_product' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        // Add foreign key constraint
        $this->forge->addForeignKey('id_category', 'categories', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
