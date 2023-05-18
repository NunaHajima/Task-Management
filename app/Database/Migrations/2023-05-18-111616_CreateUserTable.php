<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $fields = [
            "id_employee" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "employeename" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "employeerole" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "emailaddress" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "passwordtampil" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "passwordemployee" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id_employee', true);
        $this->forge->addKey('emailaddress', false, true); // Uniqe Key
        $this->forge->addField($fields);
        $this->forge->createTable('UserLogin', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('UserLogin', true); //If Exists drop table products
    }
}

