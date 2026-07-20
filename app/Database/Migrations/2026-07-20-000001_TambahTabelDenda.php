<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTabelDenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_denda'         => ['type' => 'INT', 'auto_increment' => true],
            'id_pemesanan'     => ['type' => 'INT', 'null' => false],
            'id_pembatalan'    => ['type' => 'INT', 'null' => false],
            'jenis_denda'      => ['type' => "ENUM('dp_hangus','akun_dibekukan')", 'null' => false],
            'keterangan'       => ['type' => 'TEXT', 'null' => true],
            'tgl_denda'        => ['type' => 'DATETIME', 'null' => false],
        ]);
        $this->forge->addKey('id_denda', true);
        $this->forge->createTable('denda');
    }

    public function down()
    {
        $this->forge->dropTable('denda');
    }
}
