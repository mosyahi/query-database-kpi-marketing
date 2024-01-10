<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbKpiMarketing extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tasklist' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'kpi' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'deadline' => [
                'type' => 'DATE',
            ],
            'aktual' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('table_kpi_marketing');
    }

    public function down()
    {
        $this->forge->dropTable('table_kpi_marketing');
    }
}
