<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Todo extends Seeder
{
    public function run()
    {
        $data = [
            'taskname' => 'Membuat Invoice Pembelian',
            'assignedfrom'    => '',
            'date'    => '2021-07-01',
            'comments'    => 'Pembelian tanggal 1 Juni',
        ];

        // Simple Queries
        $this->db->table('todo')->insert($data);
        
    }
}
