<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LicenceTbl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'domain' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'license_key' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default'    => 'inactive',
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('licenses');
    }

    public function down()
    {
        $this->forge->dropTable('licenses');
    }
}
