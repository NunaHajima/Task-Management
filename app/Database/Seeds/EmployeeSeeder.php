<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'employeename' => 'Wisnu Murti',
            'employeerole'    => 'HRD',
            'emailaddress'    => 'wisnumurti@gmail.com',
            'password'    => 'abas',
        ];
        // Simple Queries
        $this->db->table('employee')->insert($data);
        
        $data = [
            'employeename' => 'Basuki TjhaThja Asia',
            'employeerole'    => 'Accounting',
            'emailaddress'    => 'abas@gmail.com',
            'password'    => 'murti',
        ];
        $this->db->table('employee')->insert($data);
    }
}
