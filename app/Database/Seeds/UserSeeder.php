<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'employeename' => 'Administrator',
            'employeerole'    => 'Admin',
            'emailaddress'    => 'admindisini@gmail.com',
            'passwordtampil'    => '123345asdfghjkl',
            'passwordemployee'    => md5("123345asdfghjkl"),
        ];
        // Simple Queries
        $this->db->table('userlogin')->insert($data);
    }
}