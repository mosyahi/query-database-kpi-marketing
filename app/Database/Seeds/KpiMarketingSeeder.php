<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KpiMarketingSeeder extends Seeder
{
   public function run()
   {
    $data = [
        [
            'tasklist' => 'Tasklist 1',
            'kpi' => 'Sales',
            'karyawan' => 'Budi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-09',
        ],
        [
            'tasklist' => 'Tasklist 2',
            'kpi' => 'Sales',
            'karyawan' => 'Budi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-08',
        ],
        [
            'tasklist' => 'Tasklist 3',
            'kpi' => 'Report',
            'karyawan' => 'Budi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-07',
        ],
        [
            'tasklist' => 'Tasklist 4',
            'kpi' => 'Report',
            'karyawan' => 'Budi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-12',
        ],
        [
            'tasklist' => 'Tasklist 5',
            'kpi' => 'Sales',
            'karyawan' => 'Adi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-09',
        ],
        [
            'tasklist' => 'Tasklist 6',
            'kpi' => 'Sales',
            'karyawan' => 'Adi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-12',
        ],
        [
            'tasklist' => 'Tasklist 7',
            'kpi' => 'Report',
            'karyawan' => 'Adi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-07',
        ],
        [
            'tasklist' => 'Tasklist 8',
            'kpi' => 'Report',
            'karyawan' => 'Adi',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-07',
        ],
        [
            'tasklist' => 'Tasklist 9',
            'kpi' => 'Sales',
            'karyawan' => 'Rara',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-12',
        ],
        [
            'tasklist' => 'Tasklist 10',
            'kpi' => 'Sales',
            'karyawan' => 'Rara',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-09',
        ],
        [
            'tasklist' => 'Tasklist 11',
            'kpi' => 'Report',
            'karyawan' => 'Rara',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-12',
        ],
        [
            'tasklist' => 'Tasklist 12',
            'kpi' => 'Report',
            'karyawan' => 'Doni',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-09',
        ],
        [
            'tasklist' => 'Tasklist 13',
            'kpi' => 'Sales',
            'karyawan' => 'Doni',
            'deadline' => '2022-01-10',
            'aktual' => '2022-01-12',
        ],
    ];

        // Insert data ke dalam tabel
    $this->db->table('table_kpi_marketing')->insertBatch($data);
}
}
