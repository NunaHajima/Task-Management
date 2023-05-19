<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $fields = [
            "id_users" => [
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
            "status" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id_users', true);
        $this->forge->addField($fields);
        $this->forge->createTable('users', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('users', true); //If Exists drop table products
    }
}
