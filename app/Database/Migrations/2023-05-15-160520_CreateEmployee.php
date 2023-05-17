<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
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
            "password" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id_employee', true);
        $this->forge->addField($fields);
        $this->forge->createTable('employee', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('employee', true); //If Exists drop table products
    }
}
