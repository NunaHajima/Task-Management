<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodo extends Migration
{
    public function up()
    {
        $fields = [
            "id_todo" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "taskname" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "assignedfrom" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "date" => [
                "type"=> "DATE",
            ],
            "comments" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id_todo', true);
        $this->forge->addField($fields);
        $this->forge->createTable('todo', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('todo', true); //If Exists drop table products
    }
}
