<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahNoPenanggungJawab extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_penanggung_jawab' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true, 'after' => 'lokasi'],
        ]);
        $this->forge->addColumn('pemesanan');
    }

    public function down()
    {
        $this->forge->dropColumn('pemesanan', 'no_penanggung_jawab');
    }
}
