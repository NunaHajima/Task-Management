<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'employeename' => 'Wisnu Murti',
            'employeerole'    => 'HRD',
            'emailaddress'    => 'wisnumurti@gmail.com',
            'passwordtampil'    => 'abas',
            'passwordemployee'    => md5("123345567asdfghjkL"),
        ];
        // Simple Queries
        $this->db->table('userlogin')->insert($data);
    }
}