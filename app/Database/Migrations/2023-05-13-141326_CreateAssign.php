<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssign extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "taskname" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "employee" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "date" => [
                "type"=> "DATE",
            ],    
            "comment" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('assign', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('assign', true); //If Exists drop table products
    }
}
