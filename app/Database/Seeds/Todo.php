<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Todo extends Seeder
{
    public function run()
    {
        $data = [
            'taskname' => 'Membuat Invoice Pembelian',
            'assignedfrom'    => 'HRD',
            'date'    => '2021-07-01',
            'comments'    => 'Pembelian tanggal 1 Juni',
            'status'    => 'Done',
        ];

        // Simple Queries
        $this->db->table('todo')->insert($data);
        
    }
}
