<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ListDivisi extends Migration
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
            'nama_divisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_divisi');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_divisi');
    }
}
