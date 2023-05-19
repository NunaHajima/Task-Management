<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            'taskname' => 'Menghitung pajak',
            'assignedfrom'    => 'Kepala Bagian',
            'date'    => '2021-07-01',
            'comments'    => 'Pembelian tanggal 1 Juni',
            'status'    => 'Pending',
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
    }
}

