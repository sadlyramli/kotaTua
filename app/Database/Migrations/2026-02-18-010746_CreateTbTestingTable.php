<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbTestingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'keterangan' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Menentukan Primary Key
        $this->forge->addKey('id', true);

        // Membuat Tabel 'tb_testing'
        $this->forge->createTable('tb_testing');
    }

    public function down()
    {
        // Menghapus tabel jika migrasi di-rollback
        $this->forge->dropTable('tb_testing');
    }
}
