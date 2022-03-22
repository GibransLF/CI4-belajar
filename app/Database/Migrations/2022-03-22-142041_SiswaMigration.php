<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kelas'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_lahir'       => [
                'type'       => 'DATE',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
                'null'       => 'true'
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null'       => 'true'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswas');
    }

    public function down()
    {
        $this->forge->dropTable('siswas');
    }
}
